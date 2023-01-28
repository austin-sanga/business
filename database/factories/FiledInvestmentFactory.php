<?php

namespace Database\Factories;

use App\Models\NewProject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FiledInvestment>
 */
class FiledInvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $filePath = '/home/austin/devops/codebase/business/public/FiledInvestment/1674732152.png';

        // checks if the file exists
        if (!file_exists($filePath)) {
            dd('Image (1674732152.png) not placed to storage');
        }

        $user = User::where('role', '!=', 0)->inRandomOrder()->first();
        $project = NewProject::where('status_id', 1)->inRandomOrder()->first();

        // on succeess, tinker will generate fake data
        return [
            'user_id' => $user->id,
            'project_id' => $project->id,
            'amount_invested' => $this->faker->numberBetween(10000, 9999999999),
            'date_of_deposit' => $this->faker->date,
            'deposit_upload' => '1674732152.png',
            'status_id' => 1,
        ];

    }
}
