<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TechQuestion;
use App\Http\Requests\StoreQuestion;
use Illuminate\Support\Facades\DB;

class TechQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'find');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questions.index', ['questions' => TechQuestion::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestion $request)
    {
        $validatedData = $request->validated();
        $question = TechQuestion::create($validatedData);
        //$request->session()->flash('status', 'A Q&A entry was created!');
        return view('tech');
        //return redirect()->route('techquestions.show', ['techquestion' => $question->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('questions.show', ['question' => TechQuestion::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = TechQuestion::findOrFail($id);
        return view('questions.edit', ['techquestion' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreQuestion $request, $id)
    {
        $question = TechQuestion::findOrFail($id);
        $validatedData = $request->validated();
        $question->fill($validatedData);
        $question->save();

        //$request->session()->flash('status', 'The Q&A post was updated!');
        return redirect()->route('techquestions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = TechQuestion::findOrFail($id);
        $question->delete();

        //$request->session()->flash('status', 'A Q&A post was deleted!');
        return view('tech');
    }

    public function find(Request $request)
    {
        //dd($request["keyString"]);
        $key = $request["keyString"];
        $questions = TechQuestion::where('question', 'like', '%' . $key . '%')->get();
        return view('questions.index', ['questions' => $questions]);
    }
}
