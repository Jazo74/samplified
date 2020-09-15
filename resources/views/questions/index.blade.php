@extends('layouts.app')

@section('content')
    <h3 class="w-50 bg-dark text-info text-center mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Tech Interview Q&A</h3>
    @forelse ($questions as $question)

    <div class="card bg-dark mx-4 my-3 text-light" style="border-radius: 20px;">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $question->id }}</h6>
            @guest
            @else
            <form class="d-inline" method="POST" action="{{ route('techquestions.destroy', ['techquestion' => $question->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-info border-info font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('techquestions.edit', ['techquestion' => $question->id]) }}">Edit</a>
            <h6 class="float-right text-muted mr-5">Updated {{ $question->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $question->created_at->diffForHumans() }}</h6>
            @endguest
        </div>
        <div class="card-body">
                <p class="card-text text-info d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Q:</p>
                <p class="card-text d-inline pl-3" style="font-size: 22px; white-space: pre;">{{ $question->question }}</p>
                <hr class="border-info">
                <div class="d-flex">
                    <div class="d-inline">
                        <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">A:</p>
                    </div>
                    <div class="d-inline pl-3">
                        <p class="bg-dark text-light border-info" style="font-size: 22px; white-space: pre;">{{ $question->answer }}</p>
                    </div>     
                </div>   
            </div>
    </div>
    @empty
    <div>
        <H3 class="text-info text center">No questions yet!</H3>
    </div>
    @endforelse
@endsection('content')