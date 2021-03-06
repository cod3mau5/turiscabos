<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function services(){
        return view('pages.services');
    }
    public function about(){
        return view('pages.about-us');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function mx(){
        return view('pages.faq');
    }
}
