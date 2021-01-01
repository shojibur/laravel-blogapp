<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Middle ware to protect store method
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(20);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'body' => 'required'
       ]);

       $request->user()->posts()->create([
           'body' => $request->body
       ]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return back();
    }
}
