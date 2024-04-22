<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }
 
    public function about()
    {
        return view('about');
    }

    public function updateTheme(Request $request)
{
    $user = User::user();
    $user->theme = $request->input('theme');
    $user->save();
    
    return redirect()->back()->with('success', 'Thème mis à jour avec succès.');
}
}
