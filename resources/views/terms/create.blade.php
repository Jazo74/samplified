@extends('layouts.app')

@section('content')
<h3 class="w-50 bg-dark text-light text-center mb-3 mt-2 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Terms</h3>
<form class="bg-dark mx-4 mt-4 mb-5" method="POST" action="{{ route('terms.store') }}" style="border-radius: 20px;">
    @csrf
    <div class="form-group px-4 pt-3">
        <h5 class="text-light font-weight-bold">Category</h5>
        <input class="form-control bg-dark text-light border-light" type="text" name="category" value="{{ old('term', $term->category ?? null) }}">
    </div>
    <div class="form-group px-4">
        <h5 class="text-light font-weight-bold">Term</h5>
        <input class="form-control bg-dark text-light border-light" type="text" name="term" value="{{ old('term', $term->term ?? null) }}">
    </div>
    <div class="form-group px-4"> 
        <h5 class="text-light font-weight-bold">Definition in English</h5>
        <div class="d-flex pb-4">
            <textarea class="form-control bg-dark text-light border-light d-inline" name="definition_eng" rows="11" cols="20">{{ old('definition_eng', $term->definition_eng ?? null) }}</textarea>
        </div>    
    </div>
    <div class="form-group px-3"> 
        <h5 class="text-light font-weight-bold">Definition in Hungarian</h5>
        <div class="d-flex pb-4">
            <textarea class="form-control bg-dark text-light border-light d-inline" name="definition_hun" rows="11" cols="20">{{ old('definitio_eng', $term->definition_hun ?? null) }}</textarea>
            <button class="btn btn-lg btn-light ml-4 mr-1 d-inline" type="submit">Add</button>
        </div>    
    </div>
</form>
<div class="mt-3">
    <hr class="border-primary">
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

    
@endsection('content')