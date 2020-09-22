<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Http\Requests\StoreTopic;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
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
        $topics = Topic::all()->sortBy('serial');
        return view('topics.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopic $request)
    {
        $validatedData = $request->validated();
        $topic = Topic::create($validatedData);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        return view('topics.edit', ['topic' => $topic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTopic $request, $id)
    {
        $topic = Topic::findOrFail($id);
        $validatedData = $request->validated();
        $topic->fill($validatedData);
        $topic->save();

        //$request->session()->flash('status', 'The Q&A post was updated!');
        return redirect()->route('topic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();

        //$request->session()->flash('status', 'A Q&A post was deleted!');
        return view('topic');
    }

    public function find(Request $request)
    {
        //dd($request["keyString"]);
        $key = $request["keyString"];
        $topics = Topic::where('topic', 'like', '%' . $key . '%')->get();
        return view('topics.index', ['topics' => $topics]);
    }
}
