<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Middle ware to protect store method
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function index()
    {
        return view('posts.index');
    }

    public function store()
    {
        dd('post');
    }
}
