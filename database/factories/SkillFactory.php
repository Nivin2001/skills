<?php

namespace Database\Factories;
use App\Models\Skill;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i=0;
        $i++;
        return [
            //
            'name'=>$this->faker->word(),
            'img' =>'skills/$i.png',
            'cat_id'=>1
        ];
    }
}
