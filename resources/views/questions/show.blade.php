@extends('layouts.app')

@section('content')

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