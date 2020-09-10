@extends('layouts.app')

@section('content')

<form class="bg-primary rounded mx-4" method="POST" action="{{ route('topics.update', ['topic' => $topic->id]) }}">
    @csrf
    @method('PUT')

    <div class="form-group px-4 pt-2">
        <label class="text-light">Topic</label>
        <input class="form-control" type="text" name="topic" value="{{ old('topic', $topic->topic ?? null) }}">
    </div>
    <div class="form-group px-4 pt-2">
        <label class="text-light">Subtopic</label>
        <input class="form-control" type="text" name="sub_topic" value="{{ old('subtopic', $topic->sub_topic ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <label class="text-light">Serial</label>
        <input class="form-control" type="number" name="serial" value="{{ old('serial', $topic->serial ?? null) }}">
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

    <button class="btn btn-outline-light mt-3 ml-4" type="submit">Update Topic</button>
    <hr>
</form>
    
@endsection('content')