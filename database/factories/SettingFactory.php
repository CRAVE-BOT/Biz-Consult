<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'facebook'=>$this->faker->url(),
            'twitter'=>$this->faker->url(),
            'instagram'=>$this->faker->url(),
            'youtube'=>$this->faker->url(),
            'linkedin'=>$this->faker->url(),

        ];
    }
}
