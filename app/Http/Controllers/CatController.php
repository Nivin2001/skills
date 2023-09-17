<?php

namespace App\Http\Controllers;
use App\Models\cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class CatController extends Controller
{
    //

    public function index()
    {
        // return'ok';
        //  catgoryوظيفتها تجيبيلي الكونتورلور الي
        // موجودة عندي
      $cats=cat::all();
      //  بجيب البيانات بعدها  بيروح ع الفيو بعدها بطبع البيانات
      return view('admin.cats.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.cats.create')

        ->with(' success','category added successfully');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if the date from form has the same name of date in database we use this way
        // take all date from form then return it in index to show it
        Cat::create($request->all());
        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat=Cat::findOrFail($id);
        // return $cat;
        return view('admin.cats.edit',compact('cat'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
      $cat=Cat::findOrFail($id);
      $cat->update($request->all());
    return redirect() ->route('cats.index')
    ->with('success','category updated successfully')
    ;
    }
    /**
     * Remove the specified resource from storage.
     */

     public function archive()
     {
        $cats=Cat::onlyTrashed()->get();
        return view('admin.cats.archive');
     }
    public function destroy(string $id)
    {
        //shoul have category into to print it in form

    $cat=Cat::destroy($id);
    return redirect() ->route('cats.index')
    ->with('success','category deleted successfully')
    ;


    }
}


