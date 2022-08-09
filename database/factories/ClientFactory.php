<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nom_client' => $this->faker->name(),
            'mail_client' => $this->faker->unique()->safeEmail(),
            'addresse_client' => $this->faker->address(),
            'tel_client' => $this->faker->phoneNumber(),
        ];
    }
}
