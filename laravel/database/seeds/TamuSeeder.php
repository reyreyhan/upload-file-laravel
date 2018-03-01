<?php

use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); // import library faker
        $limit = 5;

        for($i = 0; $i < $limit; $i++) {
          DB::table('tamu')->insert([
            'nrp' => $faker->unique()->phoneNumber,
            'nama' => $faker->name,
            'laporan' => 'Ini Laporan',
            'image' => 'IniGambar.png',
            'status' => 'Belum',
          ]);
        }
    }
}
