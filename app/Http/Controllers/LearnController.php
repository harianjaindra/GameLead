<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{

    public function learn()
    {
        return view('learn');
    }

    public function learnML()
    {
        return view('learnML');
    }

    public function learnDota()
    {
        return view('learnDota');
    }
}
