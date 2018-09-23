<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
use App\Biodata_dosen;
use Illuminate\Support\Facades\DB;
include(app_path() . '/josso-php-inc/josso-cfg.inc');
include(app_path() . '/josso-php-inc/class.jossoagent.php');
//\Composer\Autoload\includeFile(App\josso-php-inc\josso-cfg.inc);

class Authenticate_josso {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth_josso;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth_josso)
	{
		$this->auth_josso = $auth_josso;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		/* @var $josso_agent type */
        session_start();
        $josso_agent = \jossoagent::getNewInstance();
        $ssoSessionId = $josso_agent->accessSession();
        $user= $josso_agent->getUserInSession();
        if(isset($user)){
            // dd(session("is_error"));
            
                session(["userID"=>$user->name]);
                    // dd(count($is_dosen));

            return $next($request);
        }else{
            // dd(url()->current());
            $_SESSION['JOSSO_ORIGINAL_URL'] = url()->current();
            $back_url = explode("/", $_SERVER['REQUEST_URI']);
            $this->jossoRequestLoginForUrl($back_url[1]);
        }
                /*if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}

		return $next($request);*/
	}
    function jossoRequestLoginForUrl($currentUrl) {
         session(["back_url"=>$currentUrl]);
                // Get JOSSO Agent instance
        $josso_agent = \jossoagent::getNewInstance();
        $securityCheckUrl = $this->createBaseUrl().$josso_agent->getBaseCode().'/servicecheck/'.$currentUrl;
                //print $securityCheckUrl;exit;

        $loginUrl = 'https://akun.um.ac.id/josso/signon/login.do?josso_back_to=' . $securityCheckUrl;
        // dd($loginUrl);

        $loginUrl = $loginUrl . $this->createFrontChannelParams();
                //print $loginUrl;exit;

        $this->forceRedirect($loginUrl, $currentUrl);

    }

    function createBaseUrl() {
                // ReBuild securityCheck URL
        $protocol = 'http';
        $host = $_SERVER['HTTP_HOST'];

        if (isset($_SERVER['HTTPS'])) {

                    // This is a secure connection, the default PORT is 443
            $protocol = 'https';
            if ($_SERVER['SERVER_PORT'] != 443) {
                $port = $_SERVER['SERVER_PORT'];
            }

        } else {
                    // This is a NON secure connection, the default PORT is 80
            $protocol = 'http';
            if ($_SERVER['SERVER_PORT'] != 80) {
//                        $port = $_SERVER['SERVER_PORT'];
            }
        }

        return $protocol.'://'.$host.(isset($port) ? ':'.$port : '');

    }
    public static function forceRedirect($url,$currentUrl) {
        session(["back_url"=>$currentUrl]);
            // dd(session("back_url"));

        // return redirect("/");
        if (!headers_sent()) {
            session(["back_url"=>$currentUrl]);
        // dd(session("back_url"));
            // ob_end_clean();
        }

        header("Location: " . $url);
        exit();
        // printf('<HTML>');
        // printf('<META http-equiv="Refresh" content="0;url=%s">', $url);
        // printf('<BODY onload="try {self.location.href="%s" } catch(e) {}"><a href="%s">Redirect </a></BODY>', $url, $url);
        // printf('</HTML>');
        // if ($die)
        //     die();
    }
    function createFrontChannelParams() {
                // Add some request parameters like host name
        $host = $_SERVER['HTTP_HOST'];
        $params = '&josso_partnerapp_host=' . $host;

        return $params;

                // TODO : Support josso_partnerapp_ctx param too ?

    }


}