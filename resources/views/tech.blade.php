@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="bg-dark text-info text-center rounded py-2 mt-3">Tech Interview Q&A</h3>
    <div class="card-deck text-center justify-content-center mt-2">
        <div class="card bg-dark m-4 border-info">
            <div class="card-header text-white my-2"><a class="btn  btn-lg btn-outline-info border-info" href="{{ route('techquestions.create') }}">Add</a></div>
            <div class="card-body text-info">
                    <h5 class="card-title">Add a new Q&A</h5>
            </div>
        </div>
        <div class="card bg-dark m-4 border-primary">
            <div class="card-header text-white my-2"><a class="btn  btn-lg btn-outline-primary border-primary" href="{{ route('techquestions.index') }}">Show</a></div>
            <div class="card-body text-primary">
                    <h5 class="card-title">Show All Q&A pair</h5>
            </div>
        </div>
        <div class="card bg-dark m-4 border-danger">
            <div class="card-header text-white my-2"><a class="btn  btn-lg btn-outline-danger border-danger" href="{{ route('techquestions.index') }}">Quiz!</a></div>
            <div class="card-body text-danger">
                    <h5 class="card-title">Check your knowledge!</h5>
            </div>
        </div>
    </div>
    <div class="card bg-dark m-4 border-success">
        <div class="card-header text-center">
            <h5 class="card-title text-success">Find a Q&A pair</h5>
        </div>
        <div class="card-body">
            <div class="form-group mb-1 text-center">
                    <form method="POST" action="{{ route('techquestions.find') }}">
                        @csrf
                        <input class="form-control mb-3 bg-dark text-white border-success" type="text" name="keyString" placeholder="Type...">
                    <button class="btn btn-lg btn-outline-success border-success rounded" type="submit" >Find</button>
                    </form>
            </div> 
        </div>
    </div>
</div>
@endsection
