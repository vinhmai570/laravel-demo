<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $posts = Category::firstWhere('slug', $request->category)->posts()->paginate(6);
        return view('home.index', compact('posts', 'categories'));
    }
}
