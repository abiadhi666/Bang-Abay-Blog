<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Posts $post){
        $category_menu = Category::all();
        $data = $post->latest()->take(4)->get();
        return view('blog.blog', compact('data', 'category_menu'));
    }

    public function blog_post($slug){
        $category_menu = Category::all();
        $data = Posts::where('slug', $slug)->get();
        return view('blog.post', compact('data', 'category_menu'));
    }

    public function list_post(){
        $category_menu = Category::all();
        $data = Posts::latest()->paginate(3);
        return view('blog.list', compact('data', 'category_menu'));
    }

    public function list_category(category $category){
        $category_menu = Category::all();

        $data = $category->posts()->paginate(6);
        return view('blog.list', compact('data', 'category_menu'));
    }

    public function search(request $request){
        $category_menu = Category::all();

        $data = Posts::where('title', $request->search)->orWhere('title','like','%'.$request->search.'%')->paginate(6);
        return view('blog.list', compact('data', 'category_menu'));
    }
}
