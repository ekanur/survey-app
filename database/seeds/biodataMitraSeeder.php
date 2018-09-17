<?php

use Illuminate\Database\Seeder;

class biodataMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('biodata_mitra')->insert( [
        'jabatan_pengisi'=>'CEO',
        'nama_instansi'=>'Illiyin',
        'no_telp'=>'081928194',
        'tahun_berdiri'=>2015,
        'tahun_kerjasama'=>2017,
        'skala_operasional'=>'Internasional',
        'created_at'=>'2018-09-14 07:00:08.000',
        'updated_at'=>'2018-09-14 07:00:08.000',
        'deleted_at'=>NULL
      ] );
      
       DB::table('biodata_mitra')->insert( [
        'jabatan_pengisi'=>'Direktur',
        'nama_instansi'=>'PT Sejahtera Selalu',
        'no_telp'=>'08192489148',
        'tahun_berdiri'=>2016,
        'tahun_kerjasama'=>2017,
        'skala_operasional'=>'Nasional',
        'created_at'=>'2018-09-17 00:14:36.000',
        'updated_at'=>'2018-09-17 00:14:36.000',
        'deleted_at'=>NULL
      ] );
      
       DB::table('biodata_mitra')->insert( [
        'jabatan_pengisi'=>'Konsultan',
        'nama_instansi'=>'PT Selalu Indah',
        'no_telp'=>'081941401',
        'tahun_berdiri'=>2017,
        'tahun_kerjasama'=>2018,
        'skala_operasional'=>'Swasta',
        'created_at'=>'2018-09-17 01:14:09.000',
        'updated_at'=>'2018-09-17 01:14:09.000',
        'deleted_at'=>NULL
      ] );
      
       DB::table('biodata_mitra')->insert( [
        'jabatan_pengisi'=>'Humas',
        'nama_instansi'=>'CV Majapahit',
        'no_telp'=>'0812414141',
        'tahun_berdiri'=>2012,
        'tahun_kerjasama'=>2017,
        'skala_operasional'=>'Swasta',
        'created_at'=>'2018-09-17 01:15:35.000',
        'updated_at'=>'2018-09-17 01:15:35.000',
        'deleted_at'=>NULL
      ] );
    }
  }
