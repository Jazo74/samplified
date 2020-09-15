@extends('layouts.app')

@section('content')
<h3 class="w-50 bg-dark text-info text-center mt-3 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Tech Interview Q&A edit</h3>
<div class="card mx-4 bg-dark pb-3" style="bottom: 10px; border-radius: 20px;">
    <form method="POST" action="{{ route('terms.update', ['term' => $term->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group px-4 pt-2">
            <label class="text-light">Category</label>
            <input class="form-control bg-dark text-light" type="text" name="category" value="{{ old('category', $term->category ?? null) }}">
        </div>
        <div class="form-group px-4"> 
            <label class="text-light">Term</label>
            <input class="form-control bg-dark text-light" type="text" name="term" value="{{ old('term', $term->term ?? null) }}">
        </div>
        <div class="form-group px-4"> 
            <label class="text-light">Definition</label>
            <textarea class="form-control bg-dark text-light border-light" name="definition_eng" rows="12" cols="50">{{ old('definition_eng', $term->definition_eng ?? null) }}</textarea>
        </div>
        <div class="form-group px-4"> 
            <label class="text-light">Definició</label>
            <textarea class="form-control  bg-dark text-light border-light" name="definition_hun" rows="12" cols="50">{{ old('definition_hun', $term->definition_hun ?? null) }}</textarea>
        </div>
        <button class="btn btn-light mt-0 ml-4" type="submit">Update Q&A</button>
    </form>
</div>
<div class="mt-3">
    <p></p>
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