<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Todo;
use Facade\Ignition\Tabs\Tab;

class TagController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function todo($id)
    {
        $todos = $id == 0 ? Todo::all() : Tag::find($id)->todos;
        return response()->json($todos);
    }

    public function create(Request $request)
    {
        Tag::create(
            [
                'name' => $request->name
            ]
            );
        return response()->json(Tag::all());
    }
}
