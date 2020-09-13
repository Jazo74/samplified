@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="bg-dark text-light w-50 text-center py-2 mt-3 mx-auto" style="border-radius: 20px;">Terms</h4>
    <div class="card-deck text-center justify-content-center mt-3">
        <div class="card bg-dark m-4" style="border-radius: 20px;">
            <div class="card-header text-white my-2"><a class="btn btn-lg btn-light" href="{{ route('terms.create') }}">Add</a></div>
            <div class="card-body text-light">
                    <h5 class="card-title m-1">Add a new Term</h5>
            </div>
        </div>
        <div class="card bg-dark m-4" style="border-radius: 20px;">
            <div class="card-header text-white my-2"><a class="btn btn-lg btn-light" href="{{ route('terms.index') }}">Show</a></div>
            <div class="card-body text-light">
                    <h5 class="card-title m-1">Show All Terms</h5>
            </div>
        </div>
        <div class="card bg-dark m-4" style="border-radius: 20px;">
            <div class="card-header text-white my-2"><a class="btn btn-lg btn-light" href="{{ route('terms.index') }}">Quiz!</a></div>
            <div class="card-body text-light">
                    <h5 class="card-title m-1">Check your knowledge!</h5>
            </div>
        </div>
    </div>
    <div class="card bg-dark m-2" style="border-radius: 20px;">
        <div class="card-header text-center">
            <h5 class="card-title text-light mb-0">Find a Term</h5>
        </div>
        <div class="card-body">
            <div class="form-group mb-1 text-light text-center">
                    <form method="POST" action="{{ route('terms.find') }}">
                        @csrf
                        <input class="form-control mb-3 bg-dark text-light border-light" type="text" name="keyString" placeholder="Type...">
                    <button class="btn btn-lg btn-light rounded" type="submit">Find</button>
                    </form>
            </div> 
        </div>
    </div>
</div>
@endsection
