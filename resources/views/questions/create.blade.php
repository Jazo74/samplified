@extends('layouts.app')

@section('content')
<h3 class="w-50 bg-dark text-primary text-center mb-3 mt-2 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Tech Interview Q&A</h3>
<form class="bg-dark mx-4 mt-4" method="POST" action="{{ route('techquestions.store') }}" style="border-radius: 20px;">
    @csrf
    <div class="form-group px-4 py-3">
        <h5 class="text-light font-weight-bold">Question</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="question" value="{{ old('question', $question->question ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-light font-weight-bold">Answer</h5>
        <div class="d-flex pb-4">
            <textarea class="form-control bg-dark text-light border-info d-inline" name="answer" rows="11" cols="20">{{ old('answer', $question->answer ?? null) }}</textarea>
            <button class="btn btn-lg btn-primary ml-4 mr-1 d-inline" type="submit">Add</button>
        </div>    
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

</form>
    
@endsection('content')