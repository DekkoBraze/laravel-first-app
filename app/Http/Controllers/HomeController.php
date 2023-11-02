<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        $profile_name = auth()->user()->name;
        
        return redirect()->route('profile', ['profile_name' => $profile_name]);
       #return view('profile', compact('name'));
    }
}
