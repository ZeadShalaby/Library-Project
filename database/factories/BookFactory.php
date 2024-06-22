<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentIds = Department::pluck('id')->toArray();
        $userids = User::where('role', '2')->pluck('id')->toArray();

        return [
            'name'=>$this->faker->company,
            'user_id' => $this->faker->randomElement($userids),
            'department_id' => $this->faker->randomElement($departmentIds),   
            'star' => fake()->numberBetween($min = 0, $max = 6), 
            'view'=>null,

        ];
    }
}
