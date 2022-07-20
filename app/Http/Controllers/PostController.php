<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index(){

        // search by category jduul bener query salah
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' at '.$category->name;
        }
        // search by author judul malah all posts
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }

        return view('posts', [
            "title" => "All Posts".$title,
            "active" => "posts",
            // search by author bermasalah
            "posts" => Post::latest()->filter(request(['category','search','author']))->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
