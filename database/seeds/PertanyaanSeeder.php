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
      // SEEDER UNTUK PERTANYAAN ANGKET DOSEN, MAHASISWA, TENDIK, ALUMNI, PENGGUNA, DAN MITRA

      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/Bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang (UM)?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran UM?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja UM dalam mencapai visi, misi, tujuan, dan sasarannya?',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a',
        'pertanyaan'=>'Kualitas informasi dan profil Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b',
        'pertanyaan'=>'Kualitas jejaring yang dibangun Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4c',
        'pertanyaan'=>'Kontribusi Universitas terhadap mitra',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4d',
        'pertanyaan'=>'Kontribusi mitra terhadap kegiatan akademik Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4e',
        'pertanyaan'=>'Kontribusi mitra terhadap kegiatan non-akademik Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4f',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam kegiatan pembelajaran',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4g',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam kegiatan penelitian',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4h',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam pengabdian kepada masyarakat',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:54:52.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4i',
        'pertanyaan'=>'Kejelasan dan kelengkapan informasi yang diperlukan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4j',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4k',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4l',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4m',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4n',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4o',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4p',
        'pertanyaan'=>'Penanganan pengaduan terkait layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4q',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:58:11.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranmitra',
        'pertanyaan'=>'Tuliskan saran dan rekomendasi Ibu/Bapak kepada Universitas',
        'sasaran'=>'mitra',
        'created_at'=>'2018-10-30 13:59:53.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'buktipemahamanvmts',
        'pertanyaan'=>'Berikan contoh bukti pemahaman Ibu/Bapak terkait rumusan Visi, Misi, Tujuan dan Sasaran Program studi/Jurusan tempat Ibu/Bapak?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Jurusan/Prodi dalam mencapai visi, misi, tujuan, dan sasarannya?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Fakultas tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Fakultas tempat Ibu/Bapak bekerja?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q6',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Fakultas dalam mencapai visi dan sasarannya?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q8',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q9',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasaran Universitas?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:22:15.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10b',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10c',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Fakultas',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10d',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10a',
        'pertanyaan'=>'Kualitas dan Transparansi proses penerimaan Dosen',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10f',
        'pertanyaan'=>'Beban Mengajar',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10h',
        'pertanyaan'=>'Penjadwalan Kegiatan pembelajaran',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10i',
        'pertanyaan'=>'Kualitas sarana dan prasarana mengajar',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10e',
        'pertanyaan'=>'Relevansi rumusan capaian pembelajaran dengan kebutuhan dunia kerja',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10g',
        'pertanyaan'=>'Ketersediaan sumber belajar untuk kegiatan pembelajaran',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10j',
        'pertanyaan'=>'Dukungan akademik dan pendanaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:26:19.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10k',
        'pertanyaan'=>'Dukungan akademik pendanaan untuk diseminasi dan publikasi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10l',
        'pertanyaan'=>'Ketersediaan fasilitas untuk melakukan penelitian',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10m',
        'pertanyaan'=>'Dukungan akademik dan pendanaan untuk pengabdian kepada masyarakat',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10n',
        'pertanyaan'=>'Ketersediaan fasilitas untuk melakukan pengabdian kepada masyarakat',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10x',
        'pertanyaan'=>'Dukungan untuk pengembangan profesi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10y',
        'pertanyaan'=>'Dukungan untuk kegiatan promosi dan dan retensi',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10z',
        'pertanyaan'=>'Kualitas, keamanan, keselamatan, dan kenyamanan lingkungan kerja',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10bb',
        'pertanyaan'=>'Gaji dan Tunjangan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10o',
        'pertanyaan'=>'Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10p',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10q',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:29:46.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10r',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10s',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10t',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10u',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10v',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksanaan layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q10w',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:32:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'kepuasankinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang membuat Ibu/Bapak puas dengan kinerja yang sudah Ibu/Bapak lakukan?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'ketidakpuasankinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang membuat Ibu/Bapak tidak puas dengan kinerja yang sudah Ibu/Bapak lakukan?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'rencanakinerja',
        'pertanyaan'=>'Sebutkan hal-hal yang direncanakan Ibu/Bapak untuk memaksimalkan kinerja di waktu yang akan datang?',
        'sasaran'=>'dosen',
        'created_at'=>'2018-10-30 16:37:28.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Program Studi/Jurusan ketika Ibu/Bapak masih kuliah?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan tersebut ?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Program Studi/Jurusan dalam mencapai visi, misi, tujuan dan sasaranya?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4',
        'pertanyaan'=>'Apakah pekerjaan Ibu/Bapak relevan dengan program studi yang ditempuh di Universitas Negeri Malang ?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5',
        'pertanyaan'=>'Dari pilihan Berikut, mana yang menjelaskan status karir Ibu/Bapak',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q6',
        'pertanyaan'=>'Dari pilihan berikut ini mana yang menjelaskan status pekerjaan Ibu/Bapak :',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a1',
        'pertanyaan'=>'Kualitas informasi dan profil Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a2',
        'pertanyaan'=>'Kurikulum Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a3',
        'pertanyaan'=>'Kualitas dosen Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a4',
        'pertanyaan'=>'Kualitas pembimbingan tugas akhir/skripsi/tesis/disertasi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:05:35.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a5',
        'pertanyaan'=>'Kualitas Prodi dalam menyiapkan karir professional',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a6',
        'pertanyaan'=>'Relevansi Kurikulum Prodi dalam pengembangan individu',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a7',
        'pertanyaan'=>'Relevansi Kurikulum Prodi dalam pengembangan akademik',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a8',
        'pertanyaan'=>'Relevansi Kurikulum Prodi dalam pengembangan professional',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a9',
        'pertanyaan'=>'Relevansi Kurikulum Prodi dengan bidang pekerjaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a10',
        'pertanyaan'=>'Kualitas jejaring yang dibangun Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a11',
        'pertanyaan'=>'Kontribusi Alumni dalam kegiatan akademik Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a12',
        'pertanyaan'=>'Kontribusi Alumni dalam kegiatan non-akademik Program Studi',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a13',
        'pertanyaan'=>'Pekerjaan anda saat ini',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b1',
        'pertanyaan'=>'Kejelasan kelengkapan informasi persyaratan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b2',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:10:12.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b3',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b4',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b5',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b6',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b7',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b8',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksanaan layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b9',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saran1',
        'pertanyaan'=>'Tuliskan Pengalaman apa yang paling bermanfaat selama masa studi, untuk membantu dalam pekerjaan pasca Ibu/Bapak lulus?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saran2',
        'pertanyaan'=>'Tuliskan Pengalaman apa yang paling tidak bermanfaat selama masa studi,dalam pekerjaan pasca Ibu/Bapak lulus?',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:12:23.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranjurusan',
        'pertanyaan'=>'Program Studi / Jurusan',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:14:29.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranfakultas',
        'pertanyaan'=>'Fakultas',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:14:29.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranuniversitas',
        'pertanyaan'=>'Universitas',
        'sasaran'=>'alumni',
        'created_at'=>'2018-10-31 16:14:29.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang (UM) ?',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang (UM)?',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja UM dalam mencapai visi, misi, tujuan dan sasarannya?',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a',
        'pertanyaan'=>'Integritas (Etika dan moral) lulusan UM dalam bekerja',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b',
        'pertanyaan'=>'Profesionalisme lulusan UM dalam bekerja',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4c',
        'pertanyaan'=>'Kemahiran berkomunikasi baik lisan maupun tulisan dalam bahasa Inggris',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4d',
        'pertanyaan'=>'Tingkat penguasaan TIK untuk menunjang dan memaksimalkan pekerjaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4e',
        'pertanyaan'=>'Kemahiran dan kecerdasan berkomunikasi dalam situasi kerja',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4f',
        'pertanyaan'=>'Kemampuan bekerja dalam tim',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4g',
        'pertanyaan'=>'Potensi pengembangan diri dalam bekerja',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4h',
        'pertanyaan'=>'Wawasan interdisipliner',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4i',
        'pertanyaan'=>'Kepemimpinan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5a',
        'pertanyaan'=>'Kualitas informasi dan profil Universitas',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5b',
        'pertanyaan'=>'Kualitas alumni yang bekerja di instansi Ibu/Bapak',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5c',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam penelitian',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:24:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5d',
        'pertanyaan'=>'Keterlibatan Ibu/Bapak dalam pengabdian kepada masyarakat',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5e',
        'pertanyaan'=>'Kualitas jejaring yang dibangun Universitas',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5f',
        'pertanyaan'=>'Kontribusi Universitas terhadap pengguna',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5g',
        'pertanyaan'=>'Kontribusi pengguna terhadap kegiatan akademik',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5h',
        'pertanyaan'=>'Kontribusi pengguna terhadap kegiatan non-akademik',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5i',
        'pertanyaan'=>'Kejelasan dan kelengkapan informasi persyaratan yang diperlukan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5j',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5k',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5l',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5m',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5n',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5o',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5p',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksanaan layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5q',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:28:14.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranjurusan',
        'pertanyaan'=>'Program Studi / Jurusan',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:29:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranfakultas',
        'pertanyaan'=>'Fakultas',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:29:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranuniversitas',
        'pertanyaan'=>'Universitas',
        'sasaran'=>'pengguna',
        'created_at'=>'2018-10-31 16:29:18.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Anda memahami rumusan visi, misi, tujuan, dan sasaran Program Studi?',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Anda mengetahui rumusan visi, misi, tujuan, dan sasaran Program Studi?',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Anda, kinerja Program Studi / Jurusan dalam mencapai visi, misi, tujuan dan sasarannya?',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a1',
        'pertanyaan'=>'Kualitas informasi, profil dan spesifikasi prodi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a2',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Prodi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a3',
        'pertanyaan'=>'Kemutakhiran kurikulum program studi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a4',
        'pertanyaan'=>'Kualitas dosen program studi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a5',
        'pertanyaan'=>'Strategi pengajaran dan pembelajaran',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a6',
        'pertanyaan'=>'Sarana dan prasarana dalam kegiatan pembelajaran',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a7',
        'pertanyaan'=>'Kualitas proses belajar mengajar di Prodi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a8',
        'pertanyaan'=>'Kualitas dan transparansi penilaian hasil belajar',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a9',
        'pertanyaan'=>'Pemberian saran dan masukan oleh dosen',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a10',
        'pertanyaan'=>'Keterlibatan Anda dalam penelitian',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a11',
        'pertanyaan'=>'Keterlibatan Anda dalam pengabdian kepada masyarakat',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a12',
        'pertanyaan'=>'Kualitas prodi dalam menyiapkan karir profesional',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:27:58.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a13',
        'pertanyaan'=>'Relevansi kurikulum prodi dalam pengembangan individu',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a14',
        'pertanyaan'=>'Relevansi kurikulum prodi dalam pengembangan akademik',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a15',
        'pertanyaan'=>'Relevansi kurikulum prodi dalam pengembangan profesional',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4a16',
        'pertanyaan'=>'Relevansi kurikulum prodi dengan perkembangan dan kebutuhan dunia kerja',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b1',
        'pertanyaan'=>'Kualitas seleksi dan informasi penerimaan mahasiswa baru',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b2',
        'pertanyaan'=>'Kualitas dan dukungan teknologi dan informasi',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b3',
        'pertanyaan'=>'Kualitas dan dukungan terhadap aktivitas ekstrakurikuler',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b4',
        'pertanyaan'=>'Kejelasan dan kelengkapan informasi persyaratan yang diperlukan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b5',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b6',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b7',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b8',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b9',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b10',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b11',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksaan layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:31:38.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4b12',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'pengalamanfaedah',
        'pertanyaan'=>'Tuliskan pengalaman apa yang paling bermanfaat untuk membantu dalam proses pembelajaran Anda',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'pengalamanunfaedah',
        'pertanyaan'=>'Tuliskan pengalaman apa yang paling tidak bermanfaat untuk membantu dalam proses pembelajaran Anda',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranjurusan',
        'pertanyaan'=>'Program Studi / Jurusan',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranfakultas',
        'pertanyaan'=>'Fakultas',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranuniversitas',
        'pertanyaan'=>'Universitas',
        'sasaran'=>'mahasiswa',
        'created_at'=>'2018-11-01 07:33:05.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q1',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran unit tempat Ibu/Bapak bekerja?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q2',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran unit tempat Ibu/Bapak bekerja?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'buktipemahamanvmts',
        'pertanyaan'=>'Berikan contoh bukti pemahaman Ibu/Bapak terhadap rumusan visi, misi, tujuan, dan sasaran unit tempat Ibu/Bapak bekerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q3',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja unit kerja dalam mencapai visi, misi, tujuan dan sasarannya?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q4',
        'pertanyaan'=>'Apakah Ibu/bapak memahami rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q5',
        'pertanyaan'=>'Dari mana Ibu/Bapak mengetahui rumusan visi, misi, tujuan, dan sasaran Universitas Negeri Malang?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q6',
        'pertanyaan'=>'Bagaimana menurut Ibu/Bapak, kinerja Universitas dalam mencapai visi dan sasarannya?',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7a',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Unit Kerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7b',
        'pertanyaan'=>'Rumusan Visi, Misi, Tujuan, dan Sasaran Universitas',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7c',
        'pertanyaan'=>'Kualitas dan Transparansi proses penerimaan Tenaga Kependidikan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7d',
        'pertanyaan'=>'Relevansi keahlian Ibu/Bapak dengan unit kerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7e',
        'pertanyaan'=>'Deskripsi tugas',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7f',
        'pertanyaan'=>'Beban Pekerjaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7g',
        'pertanyaan'=>'Kualitas sarana dan prasarana',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7h',
        'pertanyaan'=>'Kualitas dukungan untuk pengembangan profesi',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:43:56.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7i',
        'pertanyaan'=>'Kualitas koordinasi di dalam unit',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7j',
        'pertanyaan'=>'Kualitas koordinasi antar unit di dalam Universitas',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7k',
        'pertanyaan'=>'Kualitas, keamanan, dan kenyamanan lingkungan kerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7l',
        'pertanyaan'=>'Keselamatan lingkungan dan keamanan kerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7m',
        'pertanyaan'=>'Gaji dan tunjangan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7n',
        'pertanyaan'=>'Kejelasan dan kelengkapan informasi persyaratan untuk memperoleh layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7o',
        'pertanyaan'=>'Prosedur pemberian layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7p',
        'pertanyaan'=>'Waktu pemberian layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7q',
        'pertanyaan'=>'Biaya pemberian layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7r',
        'pertanyaan'=>'Produk layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7s',
        'pertanyaan'=>'Kompetensi pelaksana layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7t',
        'pertanyaan'=>'Perilaku pelaksana layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7u',
        'pertanyaan'=>'Penanganan pengaduan terkait pelaksanaan layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'q7v',
        'pertanyaan'=>'Kualitas layanan kelembagaan',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:47:08.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranunitkerja',
        'pertanyaan'=>'Unit Kerja',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:48:22.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
      
      DB::table('pertanyaan_angket')->insert( [
        'kd_pertanyaan'=>'saranuniversitas',
        'pertanyaan'=>'Universitas',
        'sasaran'=>'tendik',
        'created_at'=>'2018-11-01 07:48:22.000',
        'updated_at'=>NULL,
        'deleted_at'=>NULL,
        'urutan'=>0
      ] );
    }
  }
