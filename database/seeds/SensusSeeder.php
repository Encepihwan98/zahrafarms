<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SensusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
             DB::table('sensuses')->insert([
                'nik'        => 15646,
                'nama'       => $faker->name,
                'tl'         => $faker->country,
                'ttl'        => $faker->dateTime() ,
                'pendidikan' => $faker->text,
                'status_warga' => $faker->state,
                'gol_darah'  => 'B',
                'status_pernikahan' => "belum menikah",
                'jk'         => "laki-laki",
            ]);
        }

    }
}
