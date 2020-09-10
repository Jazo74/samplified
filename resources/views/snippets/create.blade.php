@extends('layouts.app')

@section('content')
<h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">Creating Snippet</h3>
<form class="bg-dark rounded mx-4 mt-5" method="POST" action="{{ route('snippets.store') }}">
    @csrf
    <div>
        <input type="hidden" name="topic_id" value={{ $topic->id }}>
    </div>
    <div class="form-group px-4 pt-1">
        <h5 class="text-primary font-weight-bold">Language</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="language" value="{{ old('language', $snippet->language ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Message (English)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="message_eng" rows="12" cols="50">{{ old('message_eng', $snippet->message_eng ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Message (Hungarian)</h5>
        <textarea class="form-control bg-dark text-light border-info" name="message_hun" rows="12" cols="50">{{ old('message_hun', $snippet->message_hun ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Snippet</h5>
        <textarea class="form-control bg-dark text-light border-info" name="snippet" rows="12" cols="50">{{ old('snippet', $snippet->snippet ?? null) }}</textarea>
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Output</h5>
        <textarea class="form-control bg-dark text-light border-info" name="output" rows="12" cols="50">{{ old('output', $snippet->output ?? null) }}</textarea>
    </div>
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
    
@endsection('content')