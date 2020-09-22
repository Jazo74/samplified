<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSnippet extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'serial' => 'required|max:30',
            'topic_id' => 'required',
            'python_note_eng' => 'required',
            'python_note_hun' => 'required',
            'python_syntax' => 'required',
            'python_output' => 'required',
            'csharp_note_eng' => 'required',
            'csharp_note_hun' => 'required',
            'csharp_syntax' => 'required',
            'csharp_output' => 'required',
            'java_note_eng' => 'required',
            'java_note_hun' => 'required',
            'java_syntax' => 'required',
            'java_output' => 'required',
            'jscript_note_eng' => 'required',
            'jscript_note_hun' => 'required',
            'jscript_syntax' => 'required',
            'jscript_output' => 'required',
            'php_note_eng' => 'required',
            'php_note_hun' => 'required',
            'php_syntax' => 'required',
            'php_output' => 'required',
        ];
    }
}
