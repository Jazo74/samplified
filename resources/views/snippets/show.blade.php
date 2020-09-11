@extends('layouts.app')

@section('content')
        <h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">sample codes</h3>
    @forelse ($snippets as $snippet)

    <div class="card bg-dark mx-4 my-3 text-light border-info">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $snippet->id }}</h6>
            <form class="d-inline" method="POST" action="{{ route('snippets.destroy', ['snippet' => $snippet->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-outline-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-outline-primary border-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('snippets.edit', ['snippet' => $snippet->id]) }}">Edit</a>
            <h6 class="float-right text-muted mr-5">Updated {{ $snippet->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $snippet->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
                <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Language:</p>
                <p class="card-text d-inline pl-3" style="font-size: 22px;">{{ $snippet->language }}</p>
                <br>
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Message:</p>
                <p class="bg-dark text-light border-info d-inline pl-3" style="font-size: 22px;">{{ $snippet->message_eng }}</p>
                <br>
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Code:</p>
                <p class="bg-dark text-light border-info d-inline pl-3" style="font-size: 22px; white-space: pre;">{{ $snippet->snippet }}</p>
                <br>
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Output:</p>
                <p class="bg-dark text-light border-info d-inline pl-3" style="font-size: 22px;  white-space: pre;">{{ $snippet->output }}</p>
        </div>
    </div>
    
    @empty
    <div>
        <p class="text-info ml-2">No snippets yet!</p>
    </div>
    @endforelse
@endsection('content')