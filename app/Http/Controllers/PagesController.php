<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Index Page!";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function contact(){
        $data = array(
            'title' => 'Contact Us',
            'email' =>  ['myblog@blog.com', 'info@blog.com']
        );
        return view('pages.contact')->with($data);
    }
}
