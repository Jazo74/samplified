@extends('layouts.app')

@section('content')
    <h3 class="w-50 bg-dark text-light text-center mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Terms</h3>
    @forelse ($terms as $term)

    <div class="card bg-dark mx-4 text-light" style="border-radius: 20px;">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $term->id }}</h6>
            @guest
            @else    
            <form class="d-inline" method="POST" action="{{ route('terms.destroy', ['term' => $term->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('terms.edit', ['term' => $term->id]) }}">Edit</a>
            @endguest            
            <h6 class="float-right text-muted mr-5">Updated {{ $term->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $term->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
            <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Category:</p>
            <p class="card-text d-inline pl-3" style="font-size: 22px; white-space: pre-wrap;">{{ $term->category }}</p>
            <hr class="border-light">
            <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Term:</p>
            <p class="card-text d-inline pl-3" style="font-size: 22px; white-space: pre-wrap;">{{ $term->term }}</p>
            <hr class="border-light">
            <div class="d-flex">
                <div class="d-inline">
                    <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Definition:</p>
                </div>
                <div class="d-inline pl-3">
                    <p class="bg-dark text-light border-light" style="font-size: 22px; white-space: pre-wrap;">{{ $term->definition_eng }}</p>
                </div>    
            </div>  
            <div class="d-flex">
                <div class="d-inline">
                    <p class="card-text text-primary d-inline" style="font-family: 'Michroma', sans-serif; font-size: 28px;">Definició:</p>
                </div>
                <div class="d-inline pl-3">
                    <p class="bg-dark text-light border-light" style="font-size: 22px; white-space: pre-wrap;">{{ $term->definition_hun }}</p>
                </div> 
            </div>   
        </div>
    </div>
    <div class="mt-3">
        <hr>
    </div>
    @empty
    <div>
        <H3 class="text-light text center">No terms yet!</H3>
    </div>
    @endforelse
    <div class="py-3">
        <p class="text-primary">-</p>
    </div>
@endsection('content')