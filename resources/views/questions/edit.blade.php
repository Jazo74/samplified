@extends('layouts.app')

@section('content')

<form class="bg-primary rounded mx-4" method="POST" action="{{ route('techquestions.update', ['techquestion' => $techquestion->id]) }}">
    @csrf
    @method('PUT')

    <div class="form-group px-4 pt-2">
        <label class="text-light">Question</label>
        <input class="form-control" type="text" name="question" value="{{ old('question', $techquestion->question ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <label class="text-light">Answer</label>
        {{-- <input class="form-control" type="text" name="answer" value="{{ old('answer', $techquestion->answer ?? null) }}"> --}}
        <textarea class="form-control text-dark border-info" name="answer" rows="12" cols="50">{{ old('answer', $techquestion->answer ?? null) }}</textarea>
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

    <button class="btn btn-outline-light mt-3 ml-4" type="submit">Update Q&A</button>
    <hr>
</form>
    
@endsection('content')