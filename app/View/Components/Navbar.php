<?php

namespace App\View\Components;

use App\Models\cat;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $cats=cat::select('id','name')->get();
        return view('components.navbar',compact('cats'));
    }
}
