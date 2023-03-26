<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\StoreTodo;
use App\Todo;
use App\TodoTag;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function show(Int $id)
    {
        $todo = Todo::find($id);
        return response()->json($todo);
    }

    public function tag(Int $id)
    {
        $tags = Todo::find($id)->tags;
        return response()->json($tags);
    }

    public function create(Request $request)
    {
        Todo::create(
            [
                'title' => $request->title,
                'detail' => $request->detail,
                'status' => 1,
                'deadline' => $request->deadline
            ]
        );
        $tagArray = array_unique($request->tagId);
        foreach($tagArray as $tag):
        TodoTag::create(
            [
                'todo_id' => Todo::latest()->first()->id,
                'tag_id' => $tag
            ]
            );
        endforeach;
        return response()->json(Todo::all());
    }

    public function delete(Int $id)
    {
        Todo::find($id)->delete();
        return response()->json(Todo::all());
    }

    public function update(Int $id, Request $request)
    {
        $update = [
            'title' => $request->title,
            'detail' => $request->detail,
        ];
        Todo::where('id', $id)->update($update);
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function status(Int $id, Request $request)
    {
        $update = [
            'status' => $request->status
        ];
        Todo::where('id', $id)->update($update);
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function sort(Request $request)
    {
        $todos = Todo::orderBy($request->sort,'asc')->get();
        return response()->json($todos);
    }
}