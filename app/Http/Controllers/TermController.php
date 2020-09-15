<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use App\Http\Requests\StoreTerm;
use Illuminate\Support\Facades\DB;

class TermController extends Controller
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
        return view('terms.index', ['terms' => Term::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTerm $request)
    {
        $validatedData = $request->validated();
        $term = Term::create($validatedData);
        //$request->session()->flash('status', 'A Q&A entry was created!');
        return view('term');
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
        $term = Term::findOrFail($id);
        return view('terms.edit', ['term' => $term]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTerm $request, $id)
    {
        $term = Term::findOrFail($id);
        $validatedData = $request->validated();
        $term->fill($validatedData);
        $term->save();

        //$request->session()->flash('status', 'The Q&A post was updated!');
        return redirect()->route('term');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $term = Term::findOrFail($id);
        $term->delete();
        //$request->session()->flash('status', 'A Q&A post was deleted!');
        return view('term');
    }

    public function find(Request $request)
    {
        //dd($request["keyString"]);
        $key = $request["keyString"];
        $terms = Term::where('term', 'like', '%' . $key . '%')->get();
        return view('terms.index', ['terms' => $terms]);
    }
}
