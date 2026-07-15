<?php

namespace Database\Factories;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(3, 53),
            'major_id' => fake()->numberBetween(1, 11),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nidn' => fake()->unique()->numerify('##########'),
            'phone' => fake()->unique()->numerify('081#########'),
            'place_of_birth' => fake()->city(),
            'birth_date' => fake()->date('Y-m-d', '2000-01-01'),
            'gender' => fake()->randomElement(['laki_laki', 'perempuan']),
            'address' => fake()->address(),
        ];
    }

    public function safeEmail(): static
    {
        return $this->state(function (array $attributes) {
            // Mengubah nama acak menjadi format 'namadepan.namabelakang' lowercase
            $cleanName = Str::slug($attributes['name'], '.');

            return [
                'email' => "{$cleanName}@lecturer.poltekborneomedistra.ac.id",
            ];
        });
    }
}
