<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => $this->faker->unique()->safeEmail,
            'password' => $this->faker->password(6, ),
            'password_confirmation' => $this->faker->boolean,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
        ];
    }
}
