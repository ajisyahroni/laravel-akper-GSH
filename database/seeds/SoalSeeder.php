<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $random_option = ['option_1', 'option_2', 'option_3', 'option_4', 'option_5'];
        for ($i = 0; $i < 100; $i++) {
            $random_index = array_rand($random_option);
            DB::table('soals')->insert([
                'pertanyaan' => $faker->text,
                'option_1' => $faker->text,
                'option_2' => $faker->text,
                'option_3' => $faker->text,
                'option_4' => $faker->text,
                'option_5' => $faker->text,
                'jawaban' => $random_option[$random_index],
            ]);
        }
    }
}
