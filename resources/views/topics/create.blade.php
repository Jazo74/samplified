@extends('layouts.app')

@section('content')
<h3 class="sticky-top bg-dark text-info rounded mb-4 pl-5 py-2 mx-4  border border-info" style="bottom: 10px;">Creating Topics</h3>
<form class="bg-dark rounded mx-4 mt-5" method="POST" action="{{ route('topics.store') }}">
    @csrf
    <div class="form-group px-4 pt-1">
        <h5 class="text-primary font-weight-bold">Topic</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="topic" value="{{ old('topic', $topic->topic ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Sub topic</h5>
        <input class="form-control bg-dark text-light border-info" type="text" name="sub_topic" value="{{ old('sub_topic', $topic->sub_topic ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-primary font-weight-bold">Serial</h5>
        <input class="form-control bg-dark text-light border-info" type="number" name="serial" value="{{ old('serial', $snippet->serial ?? null) }}">
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button class="btn btn-outline-primary text-primary mt-3 ml-4" type="submit">Add a new topic</button>
    <hr>
</form>
    
@endsection('content')