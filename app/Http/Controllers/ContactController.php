<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
    $date['setting'] = setting::all()->first();
    return view('web.contact.index')->with($date);
    }

    // public function send(Request  $request)
    // {
    //     $request->validate([
    //         'name' =>'required|string|max:255',
    //         'email'=>'required|string|max:255',
    //         'body'=>'required|string|max:255',
    //         'subject'=>'required|string|max:255',

    //     ]);
    //     Message::create([
    //         'name' =>$request->name,
    //         'email'=>$request->email,
    //         'body'=>$request->body,
    //         'subject'=>$request->subject,

    //     ]);
    //     $request->session->flash('success','your meaasge send successfully');
    //     return redirect(route('contact.create'));
    // }
}
