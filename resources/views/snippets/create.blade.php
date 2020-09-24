@extends('layouts.appS')

@section('content')
<h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">Creating Snippet</h3>
<form class="bg-dark rounded mx-4 mt-5" method="POST" action="{{ route('snippets.store') }}">
    @csrf
    <div>
        <input type="hidden" name="topic_id" value={{ $topic->id }}>
    </div>
    <div class="form-group px-4 pt-1">
        <h5 class="text-primary font-weight-bold">Serial</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="serial" value="{{ old('serial', $snippet->serial ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Python Note (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="python_note_eng" rows="5" cols="50">{{ old('python_note_eng', $snippet->python_note_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Python Note (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="python_note_hun" rows="5" cols="50">{{ old('python_note_hun', $snippet->python_note_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Python Syntax</h5>
        <textarea class="form-control bg-dark text-light border-info" name="python_syntax" rows="5" cols="50">{{ old('python_syntax', $snippet->python_syntax ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Python Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="python_output" rows="5" cols="50">{{ old('python_output', $snippet->python_output ?? null) }}</textarea>
    </div>
    <hr class="border-success">
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">C# Note (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="csharp_note_eng" rows="5" cols="50">{{ old('csharp_note_eng', $snippet->csharp_note_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">C# Note (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="csharp_note_hun" rows="5" cols="50">{{ old('csharp_note_hun', $snippet->csharp_note_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">C# Syntax</h5>
        <textarea class="form-control bg-dark text-light border-info" name="csharp_syntax" rows="5" cols="50">{{ old('csharp_syntax', $snippet->csharp_syntax ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">C# Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="csharp_output" rows="5" cols="50">{{ old('csharp_output', $snippet->csharp_output ?? null) }}</textarea>
    </div>
    <hr class="border-success">
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Java Note (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="java_note_eng" rows="5" cols="50">{{ old('java_note_eng', $snippet->java_note_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Java Note (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="java_note_hun" rows="5" cols="50">{{ old('java_note_hun', $snippet->java_note_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Java Syntax</h5>
        <textarea class="form-control bg-dark text-light border-info" name="java_syntax" rows="5" cols="50">{{ old('java_syntax', $snippet->java_syntax ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Java Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="java_output" rows="5" cols="50">{{ old('java_output', $snippet->java_output ?? null) }}</textarea>
    </div>
    <hr class="border-success">
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Javascript Note (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="jscript_note_eng" rows="5" cols="50">{{ old('jscript_note_eng', $snippet->jscript_note_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Javascript Note (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="jscript_note_hun" rows="5" cols="50">{{ old('jscript_note_hun', $snippet->jscript_note_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Javascript Syntax</h5>
        <textarea class="form-control bg-dark text-light border-info" name="jscript_syntax" rows="5" cols="50">{{ old('jscript_syntax', $snippet->jscript_syntax ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Javascript Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="jscript_output" rows="5" cols="50">{{ old('jscript_output', $snippet->jscript_output ?? null) }}</textarea>
    </div>
    <hr class="border-success">
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">PHP Note (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="php_note_eng" rows="5" cols="50">{{ old('php_note_eng', $snippet->php_note_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">PHP Note (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="php_note_hun" rows="5" cols="50">{{ old('php_note_hun', $snippet->php_note_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">PHP Syntax</h5>
        <textarea class="form-control bg-dark text-light border-info" name="php_syntax" rows="5" cols="50">{{ old('php_syntax', $snippet->php_syntax ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">PHP Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="php_output" rows="5" cols="50">{{ old('php_output', $snippet->php_output ?? null) }}</textarea>
    </div>
    <hr class="border-success">
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button class="btn btn-outline-primary text-primary mt-3 ml-4" type="submit">Add a new syntax block</button>
    <hr>
</form>
<div class="py-3">
    <p class="text-primary">-</p>
</div>    
@endsection('content')