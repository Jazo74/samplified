@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="w-50 mx-auto bg-dark text-success text-center py-2 mt-3" style="border-radius: 20px;">Topics & Syntaxes</h3>
    <div class="card-deck text-center justify-content-center mt-3">
        @guest
        @else    
        <div class="card bg-dark m-4" style="border-radius: 20px;">
            <div class="card-header my-2"><a class="btn btn-lg btn-success text-dark" href="{{ route('topics.create') }}">Add</a></div>
            <div class="card-body text-light">
                    <h5 class="card-title">Add Topic</h5>
            </div>
        </div>
        @endguest
        <div class="card bg-dark m-4" style="border-radius: 20px;">
            <div class="card-header my-2"><a class="btn btn-lg btn-success text-dark" href="{{ route('topics.index') }}">Show</a></div>
            <div class="card-body text-light">
                    <h5 class="card-title">Show topics</h5>
            </div>
        </div>
    </div>
    <div class="card bg-dark m-2" style="border-radius: 20px;">
        <div class="card-header text-center py-auto">
            <h5 class="card-title text-light">Find a Topics</h5>
        </div>
        <div class="card-body">
            <div class="form-group mb-1 text-light text-center">
                    <form method="POST" action="{{ route('topics.find') }}">
                        @csrf
                        <input class="form-control mb-3 bg-dark text-light border-success" type="text" name="keyString" placeholder="Type...">
                    <button class="btn btn-lg btn-success text-dark font-weight-bold rounded" type="submit" >Find</button>
                    </form>
            </div> 
        </div>
    </div>
</div>
@endsection
