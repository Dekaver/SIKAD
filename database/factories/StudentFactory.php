<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(54, 1053),
            'major_id' => fake()->numberBetween(1, 11),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nim' => fake()->unique()->numerify('##########'),
            'phone' => fake()->unique()->numerify('081#########'),
            'place_of_birth' => fake()->city(),
            'birth_date' => fake()->date('Y-m-d', '2014-01-01'),
            'gender' => fake()->randomElement(['laki_laki', 'perempuan']),
            'address' => fake()->address(),
            'academic_year' => fake()->year(),
            'term' => fake()->randomElement(['1', '2']),
        ];
    }

    public function safeEmail(): static
    {
        return $this->state(function (array $attributes) {
            // Mengubah nama acak menjadi format 'namadepan.namabelakang' lowercase
            $nim = $attributes['nim'];

            return [
                'email' => "{$nim}@student.poltekborneomedistra.ac.id",
            ];
        });
    }
}
