<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = ['topic_id', 'language', 'message_eng', 'message_hun', 'snippet', 'output'];

    public function topic()
    {   
        return $this->belongsTo('App\Topic');
    }

}
