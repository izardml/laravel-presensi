<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'teacher_id' => 1,
            'subject_id' => fake()->numberBetween(1, 3),
            'kelas_id' => fake()->numberBetween(2, 4),
            'date' => fake()->date(),
            'topic' => 'Test 1',
        ];
    }
}
