<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(Model::class, function (Faker $faker) {
    return [
        'judul'     => $this->faker->firstName(),
        'isi'       => null,
        'foto'      => null,
        'kategori'  => null,
        'created_at' => null,
        'update_at'  => null,
    ];
});
