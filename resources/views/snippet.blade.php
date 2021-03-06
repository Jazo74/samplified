@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="bg-dark text-info text-center rounded py-2 mt-3">Sample Code Syntaxes</h3>
    <div class="card-deck text-center justify-content-center mt-5">
        <div class="card bg-dark m-4 border-info">
            <div class="card-header text-white my-2"><a class="btn  btn-lg btn-outline-info border-info" href="{{ route('snippets.create') }}">Add</a></div>
            <div class="card-body text-info">
                    <h5 class="card-title">Add a new syntax</h5>
            </div>
        </div>
        <div class="card bg-dark m-4 border-primary">
            <div class="card-header text-white my-2"><a class="btn  btn-lg btn-outline-primary border-primary" href="{{ route('snippets.index') }}">Show</a></div>
            <div class="card-body text-primary">
                    <h5 class="card-title">Show</h5>
            </div>
        </div>
    </div>
</div>
@endsection
