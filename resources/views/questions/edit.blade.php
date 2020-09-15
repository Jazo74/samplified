@extends('layouts.app')

@section('content')
    <h3 class="w-50 bg-dark text-info text-center mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Tech Interview Q&A edit</h3>
    <div class="card mx-4 bg-dark" style="bottom: 10px; border-radius: 20px;" >
        <form method="POST" action="{{ route('techquestions.update', ['techquestion' => $techquestion->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group px-4 pt-2">
                <label class="text-info">Question</label>
                <input class="form-control bg-dark text-light border-info" type="text" name="question" value="{{ old('question', $techquestion->question ?? null) }}">
            </div>
            <div class="form-group px-4"> 
                <label class="text-info">Answer</label>
                <textarea class="form-control text-light bg-dark border-info" name="answer" rows="11" cols="50">{{ old('answer', $techquestion->answer ?? null) }}</textarea>
            </div>
            <button class="btn btn-info mt-0 mb-3 ml-4" type="submit">Update Q&A</button>
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