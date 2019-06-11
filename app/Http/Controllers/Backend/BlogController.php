<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
//use App\Http\Controllers\Controller;

class BlogController extends BackendController
{
    protected $limit = 20;
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('img');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts     = Post::with('category', 'author')->latest()->paginate($this->limit);
        $postCount = Post::count();
        return view("backend.blog.index", compact('posts', 'postCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
       // $post = new Post();
        return view('backend.blog.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {

        $post = new Post();
        $post->author_id= Auth::user()->id;
        $post['title'] = $request->title;
        $post['slug'] = $request->slug;
        $post['excerpt'] = $request->excerpt;
        $post['body'] = $request->body;
        $post['published_at'] = $request->published_at;
        $post['category_id'] = $request->category_id;

        if($request->hasFile('image'))
        {
            $post->image = $this->uploadImage($request);
        }


        $post->save();

        return redirect('/backend/blog')->with('message', 'Your post was created successfully!');


    }

    private function uploadImage($request)
    {
        $image = $request->file('image');
        $fileName    = $image->getClientOriginalName();
        $extension   = $image->getClientOriginalExtension();
        
        $destination = public_path('/img'); 
        $safeName    = str_random(10).'.'.$extension;
       $successUploaded = $image->move($destination, $safeName);
 
        if ($successUploaded)
        {
        $extension   = $image->getClientOriginalExtension();
        $thumbnail   = str_replace(".{$extension}", "_thumb.{$extension}", $safeName);

            Image::make($destination . '/' . $safeName)
            ->resize(250, 170)
            ->save($destination . '/' . $thumbnail);
        }
        return $safeName;
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("backend/blog/edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
       return redirect('/backend/blog')->with('message', 'Your post was updated successfully!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // dd($post);
        $post->delete();
        return redirect('/backend/blog')->with('message', 'Your post was deleted successfully!');

    }

    public function handleRequest($request){
            $post['author_id']= Auth::user()->id;
            $post['title'] = $request->title;
            $post['slug'] = $request->slug;
            $post['excerpt'] = $request->excerpt;
            $post['body'] = $request->body;
            $post['published_at'] = $request->published_at;
            $post['category_id'] = $request->category_id;
            $post['image'] = $this->uploadImage($request);
            // dd($post);
            return $post;
    }
}
