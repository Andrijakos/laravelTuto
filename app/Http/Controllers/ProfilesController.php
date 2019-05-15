<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
       // dd($user); za provjeru onog što se u funkc prosljeđuje//
        //findOrfail daje 404 error ako netko u linku ukuca id nepostojećeg usera
        $user = User::findOrFail($user);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
