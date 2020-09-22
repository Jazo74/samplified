<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = ['topic_id', 'serial',
     'python_note_eng', 'python_note_hun', 'python_syntax', 'python_output',
     'csharp_note_eng', 'csharp_note_hun', 'csharp_syntax', 'csharp_output',
     'java_note_eng', 'java_note_hun', 'java_syntax', 'java_output',
     'jscript_note_eng', 'jscript_note_hun', 'jscript_syntax', 'jscript_output',
     'php_note_eng', 'php_note_hun', 'php_syntax', 'php_output',
    ];

    public function topic()
    {   
        return $this->belongsTo('App\Topic');
    }

}
