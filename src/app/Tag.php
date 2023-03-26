<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Todo;

class Tag extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function todos()
    {
        return $this->belongsToMany('App\Todo', 'todo_tag','tag_id','todo_id');
    }
}
