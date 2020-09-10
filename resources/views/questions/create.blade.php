@extends('layouts.app')

@section('content')
<h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">Tech Interview Q&A</h3>
<form class="bg-dark rounded mx-4 mt-5" method="POST" action="{{ route('techquestions.store') }}">
    @csrf
    
    <div class="form-group px-4 pt-1">
        <h5 class="text-primary font-weight-bold">Question</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="question" value="{{ old('question', $question->question ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Answer</h5>
        <textarea class="form-control bg-dark text-light border-info" name="answer" rows="12" cols="50">{{ old('answer', $question->answer ?? null) }}</textarea>
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

    <button class="btn btn-outline-primary text-primary mt-3 ml-4" type="submit">Add a new Q&A pair</button>
    <hr>
</form>
    
@endsection('content')