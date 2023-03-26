<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Todo extends Model
{
    //
    protected $fillable = [
        'title',
        'detail',
        'status',
        'deadline'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'todo_tag','todo_id','tag_id');
    }

}
