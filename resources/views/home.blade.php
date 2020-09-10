@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-deck mt-3">
        <div class="card bg-dark text-light text-center border-light">
            <a class="nav-link p-0" href="{{ route('tech') }}"><i class="card-img-top fas fa-question-circle text-light py-4" style="font-size:100px;"></i></a>
            <div class="card-body text-center border-top border-light">
                        <h4 class="card-title">Coding Terms</h4>
                        <p class="card-text">Libraries, Frameworks, JDK, SDK, MTK...whaat?</p>
            </div>
        </div>
            <div class="card bg-dark text-light text-center border-light">
                <a class="nav-link p-0" href="{{ route('topic') }}"><i class="card-img-top fab fa-leanpub text-success py-4" style="font-size:100px;"></i></a>
                <div class="card-body text-center border-top border-success">
                            <h4 class="card-title">Quick Syntax</h4>
                            <p class="card-text ">Simple sample codes for multiple programming languages</p>
                </div>
            </div>
    </div>
    <div class="card-deck mt-5">
            <div class="card bg-dark text-light text-center border-light">
                <a class="nav-link p-0" href="{{ route('tech') }}"><i class="card-img-top fas fa-users text-info py-4" style="font-size:100px;"></i></a>
                <div class="card-body text-center border-top border-info">
                            <h4 class="card-title">for Tech Interview</h4>
                            <p class="card-text">Questions and Answers for tech interview</p>
                </div>
            </div>
            <div class="card bg-dark text-light text-center border-light">
                <a class="nav-link p-0" href="{{ route('tech') }}"><i class="card-img-top fas fa-code text-primary py-4" style="font-size:100px;"></i></a>
                <div class="card-body text-center border-top border-primary">
                            <h4 class="card-title">for Coding Interview</h4>
                            <p class="card-text">Popular coding questions and solutions for coding interview</p>
                </div>
            </div>
    </div>
</div>
@endsection
