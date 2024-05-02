<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listPosts()
    {
        $baiViet = Posts::all();
        return view('auth.list_posts', ['baiViet' => $baiViet]);
    }
}
