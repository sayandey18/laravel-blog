<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    // Display category with pagination
    public function index() {
        $categories = Category::paginate(8);
        return view('categories.index', compact('categories'));
    }

    // Insert category in database
    public function store(Request $request) {
        $request->validate([
            'category' => 'required|string|max:255',
            'category_slug' => 'required|string|max:255|unique:categories,slug',
            'active_cat' => 'nullable|boolean'
        ]);

        $category = new Category();
        $category->name = $request->category;
        $category->slug = $request->category_slug;
        $category->active = $request->has('active_cat');
        $category->save();

        if ($category->save()) {
            return Redirect::route('categories.index')->with('status', 'category-inserted');
        }
    }

    // Delete category from database
    public function destroy($id) {
        $category = Category::find($id);

        if ($category && $category->delete()) {
            return Redirect::route('categories.index')->with('status', 'category-deleted');
        }
    }
}
