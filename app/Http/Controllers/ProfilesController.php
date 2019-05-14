<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
       // dd($user); za provjeru onog što se u funkc prosljeđuje//
        $user = User::find($user);
        return view('home', [
            'user' => $user,
        ]);
    }
}
