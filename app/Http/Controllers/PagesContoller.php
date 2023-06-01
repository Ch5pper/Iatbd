<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function products(){
        return view('pages.products');
    }    
    public function about(){
        return view('pages.about');
    }
}
