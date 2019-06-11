<?php

namespace App\Http\Controllers\Backend;
//namespace App\Http\Controllers\Home;


use App\Http\Requests;
use Illuminate\Http\Request;



class HomeController extends BackendController
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home');
    }
}
