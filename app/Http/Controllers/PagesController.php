<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Welcome to Laravel-Kings app';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Software Engineering', 'SEO', 'Web Dev']
        );
        //return view('pages.services');
        return view('pages.services')->with($data);
    }

    public function about(){
        $title = 'Know Our Services';
        //return view('pages.about');
        return view('pages.about')->with('title', $title);
    }
}
