<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Exam;

class ExamController extends Controller
{
    //
    public function show($id)
    {
        $exam=Exam::findOrFail($id);

        return view('web.exams.show',compact('exam'));

    }

    public function questions($id)
    {
        $date['exam']=Exam::findOrFail($id);
        return view('web.exams.questions')->with($date);
    }
}
