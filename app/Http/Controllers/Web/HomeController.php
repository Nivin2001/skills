<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\cat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //.
    public function index()
{
    $cats = Cat::select('id', 'name')->where('active','=','1')->get();
    return view('web.index', compact('cats'));
}

}
