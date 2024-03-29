<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Post;
use App\Category;
use App\User;

class HomeController extends Controller
{
    protected $limit  = 4;

    public function homepage(){ 
        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->Paginate($this->limit);
        return view('home.index', compact('posts'));
    }

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
        $categories = Category::with(['posts' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get();
        
        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->Paginate($this->limit);
         return view("blog.blog", compact('posts', 'categories'));
       
    }


    public function categoryPage(Category $category)
    {
        $categoryName = $category->title;

        $categories = Category::with(['posts' => function($query) {
            $query->published();
        } ])->orderBy('title', 'asc')->get();

        $posts = $category->posts()
                        ->with('author')
                        ->latestFirst()
                        ->published()
                        ->Paginate($this->limit);
        return view("blog.blog", compact('posts', 'categories', 'categoryName'));  
         // dd(\DB::getQueryLog());
       
    }
  
    // public function popularPage(Popular $popular)
    // {
    //     $popularPosts= $popular->title;

    // }

    public function showPage($id)
    {
        $categories = Category::with(['posts' => function($query) {
            $query->published();
        } ])->orderBy('title', 'asc')->get();

        $post = Post::published()->where('slug', $id)->first();
        return view("blog.show", compact('post', 'categories'));
    }

    public function contactPage(){   
        return view('home.contact');
    }

   

}