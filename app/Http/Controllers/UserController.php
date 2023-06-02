<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $sharedProducts = auth()->user()->products()->with('borrowers')->get();
    return view('products.index', compact('sharedProducts'));
}

}
