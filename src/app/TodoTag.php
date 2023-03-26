<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoTag extends Model
{
    //
    protected $fillable = [
        'todo_id', 'tag_id',
    ];
    protected $table = "todo_tag";
}
