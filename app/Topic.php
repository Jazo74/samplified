<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['topic', 'sub_topic', 'serial'];

    public function snippets()
    {
        return $this->hasMany('App\Snippet');
    }
}
