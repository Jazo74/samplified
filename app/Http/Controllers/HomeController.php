<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TechQuestion;
use App\Term;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $techQuestionCount = TechQuestion::All()->count();
        $termCount = Term::All()->count();
        //return view('home', ['tecQuestionCount' => $techQuestionCount]);
        return view('home', compact('techQuestionCount', 'termCount'));

    }

    public function topic()
    {
        return view('topic');
    }

    public function snippet()
    {
        return view('snippet');
    }
    public function tech()
    {
        return view('tech');
    }

    public function code()
    {
        return view('code');
    }

    public function term()
    {
        return view('term');
    }
}
