<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // 練習 3-4
    public function index($name = 'Everybody')
    {
        $data = ['name' => $name];
        return view('hello.index', $data);
    }
}
