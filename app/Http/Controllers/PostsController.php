<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //Dodatkom ovog potrebna je autorizacija za postanje slika, redirekta na login ako nis regan
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        //sa store() smo mu rekli di da spremi slike
        $imagePath = request('image')->store('uploads', 'public');

        //kroz image::make radimo sliku kvadratnom
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        //tu mu govorimo što i kako da spremi u bazu
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

       return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
       // compact('post') je jednako [ 'post' => $post]
        return view('posts.show', compact('post'));
    }
}
