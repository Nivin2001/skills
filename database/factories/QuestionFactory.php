<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $exam = Exam::factory()->create();
        return [
            //
            'title'=>$this->faker->word(),
            // number of word is 5 and random
            'option_1' =>$this->faker->sentence(5,true),
            'option_2' =>$this->faker->sentence(5,true),
            'option_3' =>$this->faker->sentence(5,true),
            'option_4' =>$this->faker->sentence(5,true),
            'right_ans' =>$this->faker->numberBetween(1,4),
            'exam_id' => $exam->id, // Use the ID of the created exam
        ];
    }
}
