@extends('layouts.app')

@section('content')
        <h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">Tech Interview Q&A</h3>
    @forelse ($snippets as $snippet)

    <div class="card bg-dark mx-4 my-3 text-light border-info">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $snippet->id }}</h6>
            <form class="d-inline" method="POST" action="{{ route('techquestions.destroy', ['techquestion' => $question->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-outline-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-outline-primary border-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('techquestions.edit', ['techquestion' => $question->id]) }}">Edit</a>
            <h6 class="float-right text-muted mr-5">Updated {{ $question->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $question->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
                <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Q:</p>
                <p class="card-text d-inline pl-3" style="font-size: 22px; white-space: pre;">{{ $question->question }}</p>
                <hr class="border-info">
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">A:</p>
                <p class="bg-dark text-light border-info" style="font-size: 22px; white-space: pre;">{{ $question->answer }}</p>
        </div>
    </div>


    {{-- <div class="border border-primary rounded mb-3 pb-3">
        <div class="clearfix bg-primary mb-2 rounded-top pt-2">   
            <div class="float-left text-white font-weight-bold pt-1 pl-3" href="{{ route('techquestions.show', ['techquestion' => $question->id]) }}">{{ $question->question}}</div>
            <div class="float-right pr-2">
                <a class="btn btn-light text-primary font-weight-bold btn-sm ml-2" href="{{ route('techquestions.edit', ['techquestion' => $question->id]) }}">Edit</a>
                <form class="d-inline" method="POST" action="{{ route('techquestions.destroy', ['techquestion' => $question->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-light text-danger font-weight-bold btn-sm ml-2" type="submit" value="Delete">
                </form>
            </div>
            @if($post->comments_count)
                <div class="float-right text-light mb-2 pt-1 pr-3"><strong>Comments: </strong>{{ $post->comments_count }}</div>
            @else 
                <div class="float-right text-light mb-2 pt-1 pr-3"><strong>There are no comments, yet.</strong></div>
            @endif
        </div>  
        <p class="d-block text-dark mb-3 px-3">{{ $question->answer }}</p>
        
    </div> --}}
    @empty
    <div>
        <p class="text-info ml-2">No questions yet!</p>
    </div>
    @endforelse
@endsection('content')