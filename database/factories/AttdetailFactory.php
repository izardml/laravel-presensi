<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attdetail>
 */
class AttdetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'attendance_id' => fake()->numberBetween(1, 20),
            'student_id' => 2,
            'attstatus' => "tanpaKeterangan",
        ];
    }
}
