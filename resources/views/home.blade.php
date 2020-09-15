@extends('layouts.app')

@section('content')
<div class="container my-auto d-flex pt-4">
    <div class="w-50">
        <div class="card-deck h-75">
            <h1 class="display-4 text-light">Have a look around!</h1>
            <h5>You could find something useful...</h5>
        </div>
        <div class="card-deck border-top border-dark">
            <div class="card bg-primary border-0 px-0">
                <div class="card-body px-1">
                    <h2 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">5</h2>
                    <h5 class="card-text text-light">programming languages</h5>                    
                </div>
            </div>
            <div class="card bg-primary border-0 px-1">
                <div class="card-body px-1">
                    <h2 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">83+</h2>
                    <h5 class="card-text text-light">coding terms</h5>                    
                </div>
            </div>    
            <div class="card bg-primary border-0 px-1">
                <div class="card-body px-1">
                    <h2 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">12</h2>
                    <h5 class="card-text text-light">topic</h5>                    
                </div>
            </div>    
        </div>
    </div>
    <div>
        <div class="card-deck mt-5 ml-5">
            <div class="card bg-dark text-light text-center" style="border-radius: 20px;">
                <a class="nav-link p-0" href="{{ route('term') }}"><i class="card-img-top fas fa-question-circle text-light py-3" style="font-size:80px;"></i></a>
                <div class="card-body text-center border-top border-light p-3">
                            <h4 class="card-title">Terms</h4>
                            {{-- <p class="card-text">Libraries, Frameworks, JDK, SDK, MTK...whaat?</p> --}}
                </div>
            </div>
            <div class="card bg-dark text-light text-center ml-1" style="border-radius: 20px;">
                <a class="nav-link p-0" href="{{ route('topic') }}"><i class="card-img-top fab fa-leanpub text-success py-3" style="font-size:80px;"></i></a>
                <div class="card-body text-center border-top border-success p-3">
                            <h4 class="card-title">Syntax</h4>
                            {{-- <p class="card-text ">Simple short sample codes in multiple programming languages</p> --}}
                </div>
            </div>
        </div>
        <div class="card-deck mt-3 ml-5">
                <div class="card bg-dark text-light text-center" style="border-radius: 20px;">
                    <a class="nav-link p-0" href="{{ route('tech') }}"><i class="card-img-top fas fa-users text-info py-3" style="font-size:80px;"></i></a>
                    <div class="card-body text-center border-top border-info p-3">
                                <h4 class="card-title">Tech Interview</h4>
                                {{-- <p class="card-text">Questions and Answers for tech interview</p> --}}
                    </div>
                </div>
                <div class="card bg-dark text-light text-center ml-1" style="border-radius: 20px;">
                    <a class="nav-link p-0" href="{{ route('tech') }}"><i class="card-img-top fas fa-code text-primary py-3" style="font-size:80px;"></i></a>
                    <div class="card-body text-center border-top border-primary p-3">
                                <h4 class="card-title">Coding Interview</h4>
                                {{-- <p class="card-text">Popular coding questions and solutions for coding interview</p> --}}
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
