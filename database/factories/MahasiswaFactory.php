<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->randomNumber(9),
            'nama' => $this->faker->name,

            'jurusan' => $this->faker->randomElement(['Jurusan Teknologi Informasi']),
            // 'email' => $this->faker->email,
            // 'alamat' => $this->faker->address,
            // 'tgl_lahir' => $this->faker->date,
        ];
    }
}
