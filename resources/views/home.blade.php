@extends('layouts.appH')

@section('content')
<div class="container my-auto d-flex pt-4">
    <div class="w-50">
        <div class="card-deck h-75">
            <h1 class="display-4 text-light mt-2">Have a look around!</h1>
            <h4 class="mt-5">You could find something useful...</h4>
        </div>
        <div class="card-deck border-top border-dark mt-5">
            <div class="card bg-primary border-0 px-0">
                <div class="card-body px-1">
                    <h3 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">{{$syntaxCount}}+</h3>
                    <h5 class="card-text text-light">syntax samples</h5>                    
                </div>
            </div>
            <div class="card bg-primary border-0 px-1">
                <div class="card-body px-1">
                <h3 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">{{$techQuestionCount}}+</h3>
                    <h5 class="card-text text-light">tech questions</h5>                    
                </div>
            </div>    
            <div class="card bg-primary border-0 px-1">
                <div class="card-body px-1">
                    <h3 class="card-title text-dark font-weight-bold" style="font-family: 'Michroma', sans-serif;">{{$termCount}}+</h3>
                    <h5 class="card-text text-light">coding terms</h5>                    
                </div>
            </div>    
        </div>
    </div>
    <div class="w-50">
        <div class="card-deck mt-5 pl-5">
            <div id="btn-term" class="card text-light text-center border-light rounded" style="background-color: #3490dc;">
                <button class="btn" onclick="showTerm()"><i class="card-img-top fas fa-question-circle text-light" style="font-size:40px;"></i></button>
            </div>
            <div id="btn-syntax" class="card text-light text-center border-light rounded" style="background-color: #343a40;">
                <button class="btn" onclick="showSyntax()"><i class="card-img-top fab fa-leanpub text-light" style="font-size:40px;"></i></button>
            </div>
            <div id="btn-tech" class="card text-light text-center border-light rounded" style="background-color: #343a40;">
                <button class="btn" onclick="showTech()"><i class="card-img-top fas fa-users text-light" style="font-size:40px;"></i></button>
            </div>
            <div id="btn-code" class="card text-light text-center border-light rounded" style="background-color: #343a40;">
                <button class="btn" onclick="showCode()"><i class="card-img-top fas fa-code text-light" style="font-size:40px;"></i></button>
            </div>
        </div>

        {{-- ================================================================= --}}

        {{-- term submenu section --}}
        <div class="mt-3 pl-5 text-light" id="section-term">
            <div class="bg-primary py-2 rounded">
                <h4 class="card-title d-inline m-1 text-light">Coding terms</h4>
            </div>
            <div class="bg-primary mt-2 py-2 pr-3 rounded border border-light">
                <form method="POST" action="{{ route('terms.find') }}">
                    @csrf
                    <div class="input-group">
                    <input class="form-control bg-primary text-light border-light ml-3" type="text" name="keyString" placeholder="Type...">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit">Find</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('terms.index') }}">Show</a>
                <h5 class="card-title d-inline m-1">Show all terms</h5>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('terms.index') }}">Quiz!</a>
                <h5 class="card-title d-inline m-1">Check your knowledge</h5>
            </div>
            @guest
            @else
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('terms.create') }}">Add</a>
                <h5 class="card-title d-inline m-1">Add new terms</h5>
            </div>
            @endguest
        </div>
        {{-- syntax submenu section --}}
        <div class="mt-3 pl-5 text-light" id="section-syntax" style="display: none;">
            <div class="bg-primary py-2 text-light text-center rounded">
                <h4 class="card-title d-inline m-1 text-light">Syntaxes</h4>
            </div>
            <div class="bg-primary mt-2 py-2 pr-3 rounded border border-light">
                <form method="POST" action="{{ route('topics.find') }}">
                    @csrf
                    <div class="input-group">
                    <input class="form-control bg-primary text-light border-light ml-3" type="text" name="keyString" placeholder="Type...">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit">Find</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('topics.index') }}">Show</a>
                <h5 class="card-title d-inline m-1">Show all syntax samples</h5>
            </div>
            @guest
            @else
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('topics.create') }}">Add</a>
                <h5 class="card-title d-inline m-1">Add new syntax samples</h5>
            </div>
            @endguest
        </div>
        {{-- tech submenu section --}}
        <div class="mt-3 pl-5 text-light" id="section-tech" style="display: none;">
            <div class="bg-primary py-2 text-center rounded">
                <h4 class="card-title d-inline m-1 text-light">Tech Q&A</h4>
            </div>
            <div class="bg-primary mt-2 py-2 pr-3 rounded border border-light">
                <form method="POST" action="{{ route('techquestions.find') }}">
                    @csrf
                    <div class="input-group">
                    <input class="form-control bg-primary text-light border-light ml-3" type="text" name="keyString" placeholder="Type...">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit">Find</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('techquestions.index') }}">Show</a>
                <h5 class="card-title d-inline m-1">Show all tech Q&A</h5>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('techquestions.index') }}">Quiz!</a>
                <h5 class="card-title d-inline m-1">Check your knowledge</h5>
            </div>
            @guest
            @else
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('techquestions.create') }}">Add</a>
                <h5 class="card-title d-inline m-1">Add new tech Q&A</h5>
            </div>
            @endguest
        </div>
        {{-- code submenu section --}}
        <div class="mt-3 pl-5 text-light" id="section-code" style="display: none;">
            <div class="bg-primary py-2 text-right rounded">
                <h4 class="card-title d-inline m-1 text-light">Coding tasks</h4>
            </div>
            <div class="bg-primary mt-2 py-2 pr-3 rounded border border-light">
                <form method="POST" action="{{ route('terms.find') }}">
                    @csrf
                    <div class="input-group">
                    <input class="form-control bg-primary text-light ml-3" type="text" name="keyString" placeholder="Type...">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit">Find</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('terms.index') }}">Show</a>
                <h5 class="card-title d-inline m-1">Show all coding tasks</h5>
            </div>
            @guest
            @else
            <div class="bg-primary mt-2 py-3 rounded border border-light">
                <a class="btn btn btn-light d-inline ml-3" href="{{ route('terms.create') }}">Add</a>
                <h5 class="card-title d-inline m-1">Add new coding task</h5>
            </div>
            @endguest
        </div>
    </div>
</div>
<script type="application/javascript">
    function showTerm(){
        document.getElementById("section-tech").style.display = "none";
        document.getElementById("section-syntax").style.display = "none";
        document.getElementById("section-term").style.display = "block";
        document.getElementById("section-code").style.display = "none";
        document.getElementById("btn-term").style.backgroundColor = "#3490dc";
        document.getElementById("btn-syntax").style.backgroundColor = "#343a40";
        document.getElementById("btn-tech").style.backgroundColor = "#343a40";
        document.getElementById("btn-code").style.backgroundColor = "#343a40";
    }
    function showSyntax(){
        document.getElementById("section-tech").style.display = "none";
        document.getElementById("section-syntax").style.display = "block";
        document.getElementById("section-term").style.display = "none";
        document.getElementById("section-code").style.display = "none";
        document.getElementById("btn-term").style.backgroundColor = "#343a40";
        document.getElementById("btn-syntax").style.backgroundColor = "#3490dc";
        document.getElementById("btn-tech").style.backgroundColor = "#343a40";
        document.getElementById("btn-code").style.backgroundColor = "#343a40";
    }
    function showTech(){
        document.getElementById("section-tech").style.display = "block";
        document.getElementById("section-syntax").style.display = "none";
        document.getElementById("section-term").style.display = "none";
        document.getElementById("section-code").style.display = "none";
        document.getElementById("btn-term").style.backgroundColor = "#343a40";
        document.getElementById("btn-syntax").style.backgroundColor = "#343a40";
        document.getElementById("btn-tech").style.backgroundColor = "#3490dc";
        document.getElementById("btn-code").style.backgroundColor = "#343a40";
    }
    function showCode(){
        document.getElementById("section-tech").style.display = "none";
        document.getElementById("section-syntax").style.display = "none";
        document.getElementById("section-term").style.display = "none";
        document.getElementById("section-code").style.display = "block";
        document.getElementById("btn-term").style.backgroundColor = "#343a40";
        document.getElementById("btn-syntax").style.backgroundColor = "#343a40";
        document.getElementById("btn-tech").style.backgroundColor = "#343a40";
        document.getElementById("btn-code").style.backgroundColor = "#3490dc";
    }
</script>
@endsection
