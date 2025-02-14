<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function index()
    {
        return view('greet.index');
    }

    public function greet(Request $request)
    {
        $name = $request->input('name');
        return view('greet.greet', ['name' => $name]);
    }
} 