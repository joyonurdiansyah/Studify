<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\dataKaryawan;
use Faker\Generator as Faker;

$factory->define(dataKaryawan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'nomor_telepon' => $faker->phoneNumber,
        'kota' => $faker->city,
        'status' => $faker->randomElement(['Aktif', 'Tidak Aktif']),
        'foto' => $faker->imageUrl(), 
    ];
});
