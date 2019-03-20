<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Post;

class HomeController extends Controller
{
public function aboutPage(){
        return view('home.about');
    }

    public function practicePage(){
        return view('home.practice');
    }

    public function galleryPage(){
        return view('home.gallery');
    }

    public function blogPage()
    {
        $posts = Post::all();
        return view('blog.blog', compact ('posts'));
    }

    public function showPage(){
        return view('blog.show');
    }

    public function contactPage(){
        return view('home.contact');
    }
}