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
            'kelas' => $this->faker->randomElement(['TI-2A', 'TI-2B', 'TI-2C', 'TI-2D', 'TI-2E', 'TI-2F', 'TI-2G', 'TI-2H', 'TI-2I']),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Industri', 'Teknik Sipil', 'Teknik Lingkungan', 'Teknik Geologi']),
            'email' => $this->faker->email,
            'alamat' => $this->faker->address,
            'tgl_lahir' => $this->faker->date,
        ];
    }
}
