<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('manage.posts.index');
    }

    public function create(){
        return view('manage.posts.create');
    }
}
