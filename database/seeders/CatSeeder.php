<?php

namespace Database\Seeders;

use App\Models\cat;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Skill;
use Database\Factories\CatFactory;
use Database\Factories\ExamFactory;
use Database\Factories\QuestionFactory;
use Database\Factories\SkillFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //category has skills// has exams // has ques
        // we have 5 cat and followed it 8 skills
        // and each skill has two exam and the exam has 15 question
        CatFactory::times(5)->create();
        SkillFactory::times(8)->create();
        ExamFactory::times(2)->create();
       QuestionFactory::times(15)->create();




}
}
