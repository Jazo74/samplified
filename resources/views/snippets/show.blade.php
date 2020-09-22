@extends('layouts.app')

@section('content')
    <h3 class="w-50 bg-dark text-success text-center mt-4 mb-4 py-2 mx-auto" style="bottom: 10px; border-radius: 20px;">Sample Syntaxes</h3>
    <table class="table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th>Language</th>
                <th>C#</th>
                <th>Java</th>
                <th>Javascript</th>
                <th>PHP</th>
                <th>Python (3.x)</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 20; $i++)
                @foreach ($snippets as $snippet)
                @if ($snippet->serial === $i)
                <tr>
                    <th>Note (Eng)</th>
                    <td>{{$snippet->csharp_note_eng}}</td>
                    <td>{{$snippet->java_note_eng}}</td>
                    <td>{{$snippet->jscript_note_eng}}</td>
                    <td>{{$snippet->php_note_eng}}</td>
                    <td>{{$snippet->python_note_eng}}</td>
                </tr>
                <tr>
                    <th>Note (Hun)</th>
                    <td>{{$snippet->csharp_note_hun}}</td>
                    <td>{{$snippet->java_note_hun}}</td>
                    <td>{{$snippet->jscript_note_hun}}</td>
                    <td>{{$snippet->php_note_hun}}</td>
                    <td>{{$snippet->python_note_hun}}</td>
                </tr>
                <tr class="text-success">
                    <th>Code</th>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->csharp_syntax}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->java_syntax}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->jscript_syntax}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->php_syntax}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->python_syntax}}</td>
                </tr>
                <tr>
                    <th>Output</th>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->csharp_output}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->java_output}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->jscript_output}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->php_output}}</td>
                    <td class="text-monospace" style="white-space: pre;">{{$snippet->python_output}}</td>
                </tr>
                @guest
                @else
                    <tr>
                    <th>Editor row</th>
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
    <div class="py-3">
        <p class="text-primary">-</p>
    </div>
@endsection('content')