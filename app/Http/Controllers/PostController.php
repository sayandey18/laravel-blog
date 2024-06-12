<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('user')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->user_id = auth()->id();
        $post->save();

        if ($post->save()) {
            return Redirect::route('posts.index')->with('status', 'post-created');
        }
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->save();

        // Update categories

        // Update tags

        return Redirect::route('posts.edit', $post)->with('status', 'post-updatated');
    }

    public function destroy($id) {
        $post = Post::find($id);
        if ($post && $post->delete()) {
            return Redirect::route('posts.index')->with('status', 'post-deleted');
        }
    }
}
