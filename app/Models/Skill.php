<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
      // Model logic here
      use HasFactory;
      public function cat()
      {
          return $this->belongsTo(cat::class);
      }

      public function exams()
      {
          return $this->hasMany(Exam::class);
      }

      public function getStudentsCount()
      {
        // عدد الطلاب الي قدموا هاي المهارة
        $studentNum=0;
        foreach($this->exams as $exam){
            $studentNum=$studentNum+$exam->users()->count();
        }
        return $studentNum;

      }
}
