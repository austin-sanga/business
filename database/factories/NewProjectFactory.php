<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewProject>
 */
class NewProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'est_start_date' =>$this->faker->date,
            'est_duration' =>$this->faker->randomDigit(),
            'budget' =>$this->faker->numberBetween(10000, 9999999999),
            'est_roi' =>$this->faker->numberBetween(10000, 9999999999),
            'user_id' =>  User::where('role', 1)->inRandomOrder()->first()->id,
            'manager_notice' =>$this->faker->unique()->sentence(),
            'status_id'=>1,
        ];
    }
}
