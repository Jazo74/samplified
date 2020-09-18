@extends('layouts.app')

@section('content')
    <h3 class="w-50 bg-dark text-info text-center mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Snippet edit</h3>
    <div class="card mx-4 bg-dark" style="bottom: 10px; border-radius: 20px;" >
        <form method="POST" action="{{ route('snippets.update', ['snippet' => $snippet->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group px-4 pt-2">
                <label class="text-info">Language</label>
                <input class="form-control bg-dark text-light border-info" type="text" name="language" value="{{ old('language', $snippet->language ?? null) }}">
            </div>
            <div class="form-group px-4 pt-2">
                <label class="text-info">Serial</label>
                <input class="form-control bg-dark text-light border-info" type="number" name="serial" value="{{ old('serial', $snippet->serial ?? null) }}">
            </div>
            <div class="form-group px-4"> 
                <label class="text-info">Message in English</label>
                <textarea class="form-control text-light bg-dark border-info" name="message_eng" rows="11" cols="50">{{ old('message_eng', $snippet->message_eng ?? null) }}</textarea>
            </div>
            <div class="form-group px-4"> 
                <label class="text-info">Message in Hungarian</label>
                <textarea class="form-control text-light bg-dark border-info" name="message_hun" rows="11" cols="50">{{ old('message_hun', $snippet->message_hun ?? null) }}</textarea>
            </div>
            <div class="form-group px-4"> 
                <label class="text-info">Code</label>
                <textarea class="form-control text-light bg-dark border-info" name="snippet" rows="11" cols="50">{{ old('snippet', $snippet->snippet ?? null) }}</textarea>
            </div>
            <div class="form-group px-4"> 
                <label class="text-info">Output</label>
                <textarea class="form-control text-light bg-dark border-info" name="output" rows="11" cols="50">{{ old('output', $snippet->output ?? null) }}</textarea>
            </div>
            <button class="btn btn-info mt-0 mb-3 ml-4" type="submit">Update snippet</button>
        </form>
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
@endsection('content')