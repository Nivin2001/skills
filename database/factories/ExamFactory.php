<?php

namespace Database\Factories;

use App\Models\Skill;
use App\Models\Skills;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $skill = Skill::factory()->create();
        // for img
        $i=0;
        $i++;
        return [
            //
            'name'=>$this->faker->word(),
            'desc' =>$this->faker->word(1000),
            'img' =>"exams/$i.png",
            'question_no' =>15,
            'diffculty' => $this->faker->numberBetween(1,5),
            'duration_mints' =>  $this->faker->numberBetween(1,3) *30,
            'skill_id' => $skill->id,
        ];
    }
}
