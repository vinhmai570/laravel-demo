<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::paginate(6);
        return view('home.index', compact('posts', 'categories'));
    }
}
