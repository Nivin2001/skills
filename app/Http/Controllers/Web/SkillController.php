<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function show($id)
    {
        $date['skill']=Skill::findOrFail($id);
        $date['cats']=cat::select('id','name')->get();
        return view('web.skills.show')->with($date);

    }
}
