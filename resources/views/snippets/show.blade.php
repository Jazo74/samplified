@extends('layouts.appS')
@section('content')
    <div class="bg-dark text-center my-3">
        <h4 class="text-success py-2 d-inline" id="py" style="bottom: 10px;">Sample codes</h4>
        <img class="ml-5 p-0" src="{{asset('csharp.png')}}" alt="csharp.logo" style="height: 60px; width: auto;"><button class="btn btn-success text-dark ml-2" id="toggle-csharp" onclick="showCsharp()">Hide</button>
        <img class="ml-4 p-0" src="{{asset('java.png')}}" alt="java.logo" style="height: 100px; width: auto;"><button class="btn btn-success text-dark ml-2" id="toggle-java" onclick="showJava()">Hide</button>
        <img class="ml-4 p-0" src="{{asset('javascript.png')}}" alt="javascript.logo" style="height: 90px; width: auto;"><button class="btn btn-success text-dark ml-2" id="toggle-jscript" onclick="showJscript()">Hide</button>
        <img class="ml-4 p-0" src="{{asset('php.png')}}" alt="php.logo" style="height: 90px; width: auto;"><button class="btn btn-success text-dark ml-2" id="toggle-php" onclick="showPhp()">Hide</button>
        <img class="ml-4 p-0" src="{{asset('python.png')}}" alt="python.logo" style="height: 60px; width: auto;"><button class="btn btn-success text-dark ml-2" id="toggle-python" onclick="showPython()">Hide</button>
    </div>
    <table class="table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th></th>
                <th class="csharp-el"><h5>C#</h5></th>
                <th class="java-el"><h5>Java</h5></th>
                <th class="js-el"><h5>Javascript</h5></th>
                <th class="php-el"><h5>PHP</h5></th>
                <th class="python-el"><h5>Python (3.x)</h5></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 20; $i++)
                @foreach ($snippets as $snippet)
                @if ($snippet->serial === $i)
                <tr>
                    <th><h5>Note</h5></th>
                    <td class="csharp-el" style="white-space: pre-wrap;">{{$snippet->csharp_note_eng}}</td>
                    <td class="java-el" style="white-space: pre-wrap;">{{$snippet->java_note_eng}}</td>
                    <td class="js-el" style="white-space: pre-wrap;">{{$snippet->jscript_note_eng}}</td>
                    <td class="php-el" style="white-space: pre-wrap;">{{$snippet->php_note_eng}}</td>
                    <td class="python-el" style="white-space: pre-wrap;">{{$snippet->python_note_eng}}</td>
                </tr>
                {{-- <tr>
                    <th>Note (Hun)</th>
                    <td style="white-space: pre-wrap;">{{$snippet->csharp_note_hun}}</td>
                    <td style="white-space: pre-wrap;">{{$snippet->java_note_hun}}</td>
                    <td style="white-space: pre-wrap;">{{$snippet->jscript_note_hun}}</td>
                    <td style="white-space: pre-wrap;">{{$snippet->php_note_hun}}</td>
                    <td style="white-space: pre-wrap;">{{$snippet->python_note_hun}}</td>
                </tr> --}}
                <tr class="text-success">
                    <th><h5>Code</h5></th>
                    <td class="text-monospace csharp-el" style="white-space: pre;">{{$snippet->csharp_syntax}}</td>
                    <td class="text-monospace java-el" style="white-space: pre;">{{$snippet->java_syntax}}</td>
                    <td class="text-monospace js-el" style="white-space: pre;">{{$snippet->jscript_syntax}}</td>
                    <td class="text-monospace php-el" style="white-space: pre;">{{$snippet->php_syntax}}</td>
                    <td class="text-monospace python-el" style="white-space: pre;">{{$snippet->python_syntax}}</td>
                </tr>
                <tr>
                    <th><h5>Output</h5></th>
                    <td class="text-monospace csharp-el" style="white-space: pre;">{{$snippet->csharp_output}}</td>
                    <td class="text-monospace java-el" style="white-space: pre;">{{$snippet->java_output}}</td>
                    <td class="text-monospace js-el" style="white-space: pre;">{{$snippet->jscript_output}}</td>
                    <td class="text-monospace php-el" style="white-space: pre;">{{$snippet->php_output}}</td>
                    <td class="text-monospace python-el" style="white-space: pre;">{{$snippet->python_output}}</td>
                </tr>
                @guest
                @else
                    <tr>
                    <th><h5>Editor row</h5></th>
                    <td>   
                    <form class="d-inline" method="POST" action="{{ route('snippets.destroy', ['snippet' => $snippet->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger border-danger font-weight-bold btn float-right mr-3 ml-2 px-3" type="submit" value="Delete">
                    </form>
                    </td>
                    <td>
                    <a class="btn btn-primary border-primary font-weight-bold btn float-right mr-2 ml-2 px-4" href="{{ route('snippets.edit', ['snippet' => $snippet->id]) }}">Edit</a>
                    </td>
                    <td>-</td>
                    <td>-</td>    
                    </tr>
                @endguest
                @endif
                @endforeach
            @endfor
        </tbody>
    </table>
    {{-- @empty
    <div>
        <p class="text-info ml-2">No snippets yet!</p>
    </div> --}}
    <div class="py-0">
        <p class="text-primary">-</p>
    </div>
    <script type="application/javascript">
        function showPython(){
            document.querySelectorAll(".python-el").forEach((element) => {
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            let text = document.getElementById("toggle-python");
            if (text.innerText === "Hide") {
                    text.innerText = "Show";
            } else {
                    text.innerText = "Hide";
            }    

        }
        function showCsharp(){
            document.querySelectorAll(".csharp-el").forEach((element) => {
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            let text = document.getElementById("toggle-csharp");
            if (text.innerText === "Hide") {
                    text.innerText = "Show";
            } else {
                    text.innerText = "Hide";
            } 
        }
        function showJava(){
            document.querySelectorAll(".java-el").forEach((element) => {
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            let text = document.getElementById("toggle-java");
            if (text.innerText === "Hide") {
                    text.innerText = "Show";
            } else {
                    text.innerText = "Hide";
            } 
        }
        function showJscript(){
            document.querySelectorAll(".js-el").forEach((element) => {
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            let text = document.getElementById("toggle-jscript");
            if (text.innerText === "Hide") {
                    text.innerText = "Show";
            } else {
                    text.innerText = "Hide";
            } 
        }
        function showPhp(){
            document.querySelectorAll(".php-el").forEach((element) => {
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            let text = document.getElementById("toggle-php");
            if (text.innerText === "Hide") {
                    text.innerText = "Show";
            } else {
                    text.innerText = "Hide";
            } 
        }
    </script>
@endsection('content')