<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function constructor(){
        
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => [
                'required', 'image'
                ]
        ]);

        // ======================The way to make it in tinker=================
        // $post = new \App\Post();
        // $post -> caption = $data['caption'];
        // $post -> save();
        // dd($post);

        // =============================Laravel Way============================
        // \App\Post::create($data);
        
        // We need to store the uploaded image, however, it ends up in a folder not available to the public if we do.
        // To make it accesible, run php artisan storage:link which creates a symbolic link from 'public/storage' to 'storage/uploads'
        $imagePath = request('image')->store('uploads', 'public');

        // ================Authenticate the user id is correct=================
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
            ]); 

        return redirect('profiles/'.auth()->user()->id);
    }
}
