<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contactIndex()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    public function resume()
    {
        return view('resume');
    }

    public function contactSubmit(Request $request)
    {
        return view('contact', ['data' => $request]);
    }
}
