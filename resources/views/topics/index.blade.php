@extends('layouts.appS')

@section('content')
        <h4 class="w-50 bg-dark text-center text-success mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Topics</h4>
    @forelse ($topics as $topic)

    <div class="card bg-dark mx-4 my-3 text-light" style="border-radius: 20px;">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $topic->id }}</h6>
            @guest
            @else
            <form class="d-inline" method="POST" action="{{ route('topics.destroy', ['topic' => $topic->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-sm btn-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-sm btn-primary border-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('topics.edit', ['topic' => $topic->id]) }}">Edit</a>
            <a class="btn btn-sm btn-success border-success font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('snippets.create2', ['id' => $topic->id]) }}">New Syntax</a>
            @endguest
            <a class="btn btn-sm btn-info border-info font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('snippets.show', ['snippet' => $topic->id]) }}">Show Syntaxes</a>
            <h6 class="float-right text-muted mr-5">Updated {{ $topic->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $topic->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
                {{-- <p class="card-text text-light d-inline" style="font-family: 'Michroma', sans-serif; font-size: 20px;">Topic</p>
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 20px;"> / Subtopic:</p> --}}
                <p class="card-text d-inline text-light" style="font-size: 22px;">{{ $topic->topic }} /</p>
                <p class="card-text d-inline text-success pl-0" style="font-size: 22px;">{{ $topic->sub_topic }}</p>
                @guest
                @else
                <br>
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 16px;">Serial:</p>
                <p class="bg-dark text-light border-info d-inline pl-3" style="font-size: 16px;">{{ $topic->serial }}</p>
                @endguest
        </div>
    </div>
    @empty
    <div>
        <h3 class="text-success text-center">No topics yet!</h3>
    </div>
    @endforelse
    <div class="my-3 py-3">
        <p class="muted">-</p>
    </div>
@endsection('content')