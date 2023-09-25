<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'option-1',
        'option-2',
        'option-3',
        'option-4',
        'right_ans',
        'exam_id',
    ];

    public function exam()
    {
        return $this->belongsTo(exam::class);
    }
}
