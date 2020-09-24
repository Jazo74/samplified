@extends('layouts.appT')

@section('content')
    <h3 class="w-50 bg-dark text-info text-center mb-3 mt-2 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Tech Interview Q&A</h3>
    <div class="card bg-primary m-4 text-light">

        <div class="card-header">
            <h5 class="float-left"># {{ $question->id }}</h5>
            <h6 class="float-right mr-5">Updated {{ $question->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right mr-5">Created {{ $question->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
                <div class="card-title"><h5>Q:</h5></div>
                <p class="card-text">{{ $question->question }}</p>
                <hr class="border-white">
                <div class="card-title"><h5>A:</h5></div>
                <p class="card-text">{{ $question->answer }}</p>
        </div>
    </div>

    @if ((new Carbon\Carbon())->diffInMinutes($question->created_at) < 5)
        <strong>New!</strong>
    @endif
@endsection('content')