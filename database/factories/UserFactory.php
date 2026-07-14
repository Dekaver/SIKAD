<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }


    // State khusus untuk membuat Admin
    public function admin(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'admin',
        ]);
    }

    // State khusus untuk membuat Lecturer
    public function lecturer(): static
    {
        return $this->state(function (array $attributes) {
            // Mengubah nama acak menjadi format 'namadepan.namabelakang' lowercase
            $cleanName = Str::slug($attributes['name'], '.');

            return [
                'role' => 'lecturer',
                'email' => "{$cleanName}@lecturer.poltekborneomedistra.ac.id",
            ];
        });
    }

    // State khusus untuk membuat Student
    public function student(): static
    {
        return $this->state(function (array $attributes) {
            // Generate 10 digit angka acak unik untuk NIM
            $nim = fake()->unique()->numerify('##########');

            return [
                'role' => 'student',
                'email' => "{$nim}@student.poltekborneomedistra.ac.id",
            ];
        });
    }
}
