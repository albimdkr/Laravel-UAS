<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
{
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'issue' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['Open', 'In Progress', 'Closed']),
            'date_start_tshoot' => $this->faker->dateTimeThisYear,
            'date_end_tshoot' => $this->faker->optional()->dateTimeThisYear,
        ];
    }
}
