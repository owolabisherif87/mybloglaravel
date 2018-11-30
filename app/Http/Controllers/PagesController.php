<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome To My Blog!";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title );
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        //$title = "Our Services";
        $data = array(
            'title' => 'Our Services',
            'services' => ['Engineering', 'Programming', 'Graphic Design']
        );
        return view('pages.services')->with($data);
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);
    }
}
