<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{
    // Display tags with pagination
    public function index() {
        $tags = Tag::paginate(8);
        return view('tags.index', compact('tags'));
    }

    // Insert tags in database
    public function store(Request $request) {
        $request->validate([
            'tag' => 'required|string|max:255',
            'tag_slug' => 'required|string|max:255|unique:tags,slug',
            'active_tag' => 'nullable|boolean'
        ]);

        $tag = new Tag();
        $tag->name = $request->tag;
        $tag->slug = $request->tag_slug;
        $tag->active = $request->has('active_tag');
        $tag->save();

        if ($tag->save()) {
            return Redirect::route('tags.index')->with('status', 'tag-inserted');
        }
    }

    // Delete tags from database
    public function destroy($id) {
        $tag = Tag::find($id);

        if ($tag && $tag->delete()) {
            return Redirect::route('tags.index')->with('status', 'tag-deleted');
        }
    }
}
