<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
// use App\Pegawai;
// use Faker\Generator as Faker;

// class pegawaiFactory extends Factory
// {
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = Model::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition(Pegawai::class, function (Faker $faker))
//     {
//         return [
//              'name' => $this->faker->name,
//             'email' => $this->faker->unique()->safeEmail,
//             'email_verified_at' => now(),
//             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//             'remember_token' => Str::random(10),
//         ];
//     }
// }

use App\Pegawai;
use Faker\Generator as Faker;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'nama_pegawai' => $faker->name,
        'jenis_kelamin' => "",
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->secondaryAddress

    ];
});
