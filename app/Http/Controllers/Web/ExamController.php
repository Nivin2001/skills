<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    //
    public function show($id)
    {
        $exam=Exam::findOrFail($id);

        return view('web.exams.show',compact('exam'));

    }

    public function start($examId)
    {

        $user=Auth::user();
        $user->exams()->attach($examId);
        return $user;
        return redirect()->name('exam.questions', $examId);

    }

    public function questions($id)
    {
        $date['exam']=Exam::findOrFail($id);
        return view('web.exams.questions')->with($date);
    }
}
