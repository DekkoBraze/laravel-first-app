<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{   
    public function __invoke()
    {
        $profile_name = Route::input('profile_name');
        
        $user = User::firstWhere('name', $profile_name);

        if (!$user)
        {
            abort(404);
        };

        return view('profile', compact('user'));
    }
}
