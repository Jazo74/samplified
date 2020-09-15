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
    public function create()
    {
        return view('snippets.create');
    }

    public function create2($id)
    {
        echo('create2 ' . $id );
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
        return view('snippets.show', ['snippets' => Snippet::where('topic_id', $id)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
