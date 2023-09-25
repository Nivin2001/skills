<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\cat;
// use App\Models\Skill;


class CatController extends Controller
{
    //

    public function index()
    {
        $cats=cat::select('id','name')->get();
        return view('web.index',compact($cats));
    }

    public function show($id)
    {

        $date['cat']=Cat::findOrFail($id);
        $date['cats']=Cat::select('id','name')->get();
        $date['skills']=$date['cat']->skills()->paginate(6);
        return view('web.cat.show')->with($date);

    }
}
