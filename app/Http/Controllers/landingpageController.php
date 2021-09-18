<?php

namespace App\Http\Controllers;
use App\FAQ;
use App\contoh;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function index()
    {
        $FAQ = FAQ::get();
        return view('index', compact('FAQ'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
