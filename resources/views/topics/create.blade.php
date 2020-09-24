@extends('layouts.appS')

@section('content')
<h3 class="w-50 bg-dark text-center text-success mb-4 pl-5 py-2 mx-auto" style="bottom: 10px; border-radius: 18px;">Creating Topics</h3>
<form class="bg-dark mx-4 mt-5 p-2" style="border-radius: 20px;" method="POST" action="{{ route('topics.store') }}">
    @csrf
    <div class="form-group px-4 pt-1">
        <h5 class="text-success font-weight-bold">Topic</h5>
        <input class="form-control bg-dark text-light border-success" type="text" name="topic" value="{{ old('topic', $topic->topic ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-success font-weight-bold">Sub topic</h5>
        <input class="form-control bg-dark text-light border-success" type="text" name="sub_topic" value="{{ old('sub_topic', $topic->sub_topic ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-success font-weight-bold">Serial</h5>
        <input class="form-control bg-dark text-light border-success w-25" type="number" name="serial" value="{{ old('serial', $snippet->serial ?? null) }}">
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

    <button class="btn btn-lg btn-success text-light mt-3 ml-4" type="submit">Add a new topic</button>
    <hr>
</form>
    
@endsection('content')