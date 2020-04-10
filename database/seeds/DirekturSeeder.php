<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirekturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direkturs')->insert([
            'nama' => 'direktur',
            'email' => 'direktur@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
