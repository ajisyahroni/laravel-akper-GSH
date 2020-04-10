<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i =0;$i<100;$i++){

        
        
        DB::table('users')->insert([
            'nama' => $faker->name,
            'email' => $faker->email,
            'nik' => '454554545456',
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' =>  $faker->date,
            'agama' => 'islam',
            'kewarganegaraan' => 'wni',
            'telepon' =>  '082138308595',
            'nama_ibu_kandung' => $faker->name,
            'nama_ayah_kandung' => $faker->name,
            'tinggi_badan' => 147,
            'berat_badan' => 74,
            'foto_url' => './foto',
            'ijazah_url' => './ijazah',
            'kota' => $faker->city,
            'kecamatan' => $faker->city,
            'alamat' => $faker->city,
            'kodepos' => 57694,
            'pendidikan_terakhir' => 'sma/ipa',
            'rata_nem' => 78.5,

        ]);
    }
    }
}
