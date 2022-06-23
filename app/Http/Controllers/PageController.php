<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{

    function home() {
        return view('home');
    }

    function gallery() {
        return view('gallery');
    }

    function about() {
        return view('about');
    }

    function contact() {
        return view('contact');
    }

    function donate() {
        return view('donate');
    }
}
