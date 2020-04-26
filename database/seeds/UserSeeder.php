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
                'kewarganegaraan' => 'WNI',
                'telepon' =>  $faker->phoneNumber,
                'nama_ibu_kandung' => $faker->name,
                'nama_ayah_kandung' => $faker->name,
                'tinggi_badan' => rand(155, 200),
                'berat_badan' => rand(40, 100),
                'foto_url' => 'uploads/foto/' . rand(1, 3) . '.jpg',
                'ijazah_url' => 'uploads/ijazah/' . rand(1, 3) . '.png',
                'test_kesehatan_url' => 'uploads/test_kesehatan/' . rand(1, 3) . '.png',
                'tf_url' => 'uploads/transfer/' . rand(1, 3) . '.png',
                'kota' => $faker->city,
                'kecamatan' => $faker->streetName,
                'alamat' => $faker->streetAddress,
                'kodepos' => $faker->postcode,
                'pendidikan_terakhir' => 'sma/ipa',
                'sekolah_asal' => 'SMA ' . rand(1, 5) . ' ' . $faker->city,
                'rata_nem' => rand(55, 100),
                'password' => bcrypt('secret')
            ]);
        }
    }
}
