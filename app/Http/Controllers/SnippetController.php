<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use App\Topic;
use App\Http\Requests\StoreSnippet;
use Illuminate\Support\Facades\DB;

class SnippetController extends Controller
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
        return view('snippets.index', ['snippets' => Snippet::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('snippets.create');
    // }

    public function create2($id)
    {
        return view('snippets.create', ['topic' => Topic::findOrFail($id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSnippet $request)
    {
        $validatedData = $request->validated();
        $snippet = Snippet::create($validatedData);

        // $request->session()->flash('status', 'A Q&A entry was created!');
        
        return view('topic');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('snippets.show', ['snippets' => 
        Snippet::where('topic_id', $id)
        ->orderBy('serial', 'asc')
        ->orderBy('language', 'asc')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $snippet = Snippet::findOrFail($id);
        return view('snippets.edit', ['snippet' => $snippet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSnippet $request, $id)
    {
        $snippet = Snippet::findOrFail($id);
        $validatedData = $request->validated();
        $snippet->fill($validatedData);
        $snippet->save();
        return redirect()->route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $snippet = Snippet::findOrFail($id);
        $snippet->delete();
        return view('topic');
    }
}
