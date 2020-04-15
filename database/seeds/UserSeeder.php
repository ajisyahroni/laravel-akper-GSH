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
        for ($i = 0; $i < 100; $i++) {



            DB::table('users')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'nik' => '454554545456',
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' =>  $faker->date,
                'agama' => 'islam',
                'gender' => 'L',
                'kewarganegaraan' => 'wni',
                'telepon' =>  '082138308595',
                'nama_ibu_kandung' => $faker->name,
                'nama_ayah_kandung' => $faker->name,
                'tinggi_badan' => 147,
                'berat_badan' => 74,
                'foto_url' => 'uploads/foto/' . rand(1, 3) . '.png',
                'ijazah_url' => 'uploads/ijazah/' . rand(1, 3) . '.png',
                'test_kesehatan_url' => 'uploads/ijazah/' . rand(1, 3) . '.png',
                'tf_url' => 'uploads/ijazah/' . rand(1, 3) . '.png',
                'kota' => $faker->city,
                'kecamatan' => $faker->city,
                'alamat' => $faker->city,
                'kodepos' => 57694,
                'pendidikan_terakhir' => 'sma/ipa',
                'sekolah_asal' => 'sma 2',
                'rata_nem' => 78.5,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
