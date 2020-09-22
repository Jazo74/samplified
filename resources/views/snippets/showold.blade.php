@extends('layouts.app')

@section('content')
        <h3 class="w-50 bg-dark text-success text-center mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Sample Syntaxes</h3>
    @forelse ($snippets as $snippet)
    <div class="card bg-dark mx-4 my-3 text-light" style="border-radius: 20px;">
        <div class="card-header">
            <h6 class="float-left text-muted"># {{ $snippet->id }}</h6>
            @if ($snippet->language === "Python (3.x)")
                <img class="ml-3 mx-0 p-0" src="{{asset('python.png')}}" alt="pyhton.logo" style="height: 40px; width: auto;">
            @endif
            @if ($snippet->language === "C#")
                <img class="ml-3 mx-0 p-0" src="{{asset('csharp.png')}}" alt="csharp.logo" style="height: 50px; width: auto;">
            @endif
            @if ($snippet->language === "PHP")
                <img class="ml-3 mx-0 p-0" src="{{asset('php.png')}}" alt="php.logo" style="height: 50px; width: auto;">
            @endif
            @if ($snippet->language === "Javascript")
                <img class="ml-3 mx-0 p-0" src="{{asset('javascript.png')}}" alt="javascript.logo" style="height: 50px; width: auto;">
            @endif
            @guest
            @else   
            <form class="d-inline" method="POST" action="{{ route('snippets.destroy', ['snippet' => $snippet->id]) }}">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
            </form>
            <a class="btn btn-primary border-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('snippets.edit', ['snippet' => $snippet->id]) }}">Edit</a>
            @endguest
            <h6 class="float-right text-muted mr-5">Updated {{ $snippet->updated_at->diffForHumans() }}</h6>
            <h6 class="float-right text-muted mr-5">Created {{ $snippet->created_at->diffForHumans() }}</h6>
        </div>
        <div class="card-body">
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Language:</p>
                <p class="card-text d-inline pl-3" style="font-size: 22px;">{{ $snippet->language }}</p>
                <br>
                @guest
                @else   
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Serial:</p>
                <p class="card-text d-inline pl-3" style="font-size: 22px;">{{ $snippet->serial }}</p>
                <br> 
                @endguest
                <p class="card-text text-success d-inline" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Message:</p>
                <p class="bg-dark text-light border-info d-inline pl-3" style="font-size: 22px;">{{ $snippet->message_eng }}</p>
                <br>
                <p class="card-text text-success" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Code:</p>
                <p class="bg-dark text-light border-success border-top border-bottom py-1" style="font-size: 22px; white-space: pre;">{{ $snippet->snippet }}</p>
                <br>
                <p class="card-text text-success" style="font-family: 'Michroma', sans-serif; font-size: 24px;">Output:</p>
                <p class="bg-dark text-light border-success border-top border-bottom py-1" style="font-size: 22px;  white-space: pre;">{{ $snippet->output }}</p>
        </div>
    </div>
    
    @empty
    <div>
        <p class="text-info ml-2">No snippets yet!</p>
    </div>
    @endforelse
    <div class="py-3">
        <p class="text-primary">-</p>
    </div>
@endsection('content')