<?php

use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // SEEDER UNTUK PERTANYAAN ANGKET DOSEN DAN MITRA

      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/Bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang (UM)?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran UM?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja UM dalam mencapai visi, misi, tujuan, dan sasarannya?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4a',
        'pertanyaan'=>'Kualitas informasi dan profil Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4b',
        'pertanyaan'=>'Kualitas jejaring yang dibangun Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4c',
        'pertanyaan'=>'Kontribusi Universitas terhadap mitra',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4d',
        'pertanyaan'=>'Kontribusi mitra terhadap kegiatan akademik Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4e',
        'pertanyaan'=>'Kontribusi mitra terhadap kegiatan non-akademik Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4f',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam kegiatan pembelajaran',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4g',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam kegiatan penelitian',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4h',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam pengabdian kepada masyarakat',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4i',
        'pertanyaan'=>'Kejelasan dan kelengkapan informasi yang diperlukan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4j',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4k',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4l',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4m',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4n',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4o',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4p',
        'pertanyaan'=>'Penanganan pengaduan terkait layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4q',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'saranmitra',
        'pertanyaan'=>'Tuliskan saran dan rekomendasi Ibu/Bapak kepada Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:59:53.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'buktipemahamanvmts',
        'pertanyaan'=>'Berikan contoh bukti pemahaman Ibu/Bapak terkait rumusan Visi, Misi, Tujuan dan Sasaran Program studi/Jurusan tempat Ibu/Bapak?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Jurusan/Prodi dalam mencapai visi, misi, tujuan, dan sasarannya?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q4',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q5',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q6',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Fakultas dalam mencapai visi dan sasarannya?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q7',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q8',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q9',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10b',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10c',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Fakultas',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10d',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10a',
        'pertanyaan'=>'Kualitas dan Transparansi proses penerimaan Dosen',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10f',
        'pertanyaan'=>'Beban Mengajar',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10h',
        'pertanyaan'=>'Penjadwalan Kegiatan pembelajaran',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10i',
        'pertanyaan'=>'Kualitas sarana dan prasarana mengajar',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10e',
        'pertanyaan'=>'Relevansi rumusan capaian pembelajaran dengan kebutuhan dunia kerja',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10g',
        'pertanyaan'=>'Ketersediaan sumber belajar untuk kegiatan pembelajaran',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10j',
        'pertanyaan'=>'Dukungan akademik dan pendanaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10k',
        'pertanyaan'=>'Dukungan akademik pendanaan untuk diseminasi dan publikasi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10l',
        'pertanyaan'=>'Ketersediaan fasilitas untuk melakukan penelitian',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10m',
        'pertanyaan'=>'Dukungan akademik dan pendanaan untuk pengabdian kepada masyarakat',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10n',
        'pertanyaan'=>'Ketersediaan fasilitas untuk melakukan pengabdian kepada masyarakat',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10x',
        'pertanyaan'=>'Dukungan untuk pengembangan profesi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10y',
        'pertanyaan'=>'Dukungan untuk kegiatan promosi dan dan retensi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10z',
        'pertanyaan'=>'Kualitas, keamanan, keselamatan, dan kenyamanan lingkungan kerja',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10bb',
        'pertanyaan'=>'Gaji dan Tunjangan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10o',
        'pertanyaan'=>'Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10p',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10q',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10r',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10s',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10t',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10u',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10v',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksanaan layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'q10w',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'kepuasankinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang membuat Ibu/Bapak puas dengan kinerja yang sudah Ibu/Bapak lakukan?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'ketidakpuasankinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang membuat Ibu/Bapak tidak puas dengan kinerja yang sudah Ibu/Bapak lakukan?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
      
      Publicpertanyaanangket::create( [
        'kd_pertanyaan'=>'rencanakinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang direncanakan Ibu/Bapak untuk memaksimalkan kinerja di waktu yang akan datang?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL
      ] );
    }
  }
