<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\StoreTodo;
use App\Todo;

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

    public function create(Request $request)
    {
        Todo::create(
            [
                'title' => $request->title,
                'detail' => $request->detail
            ]
        );
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
            'detail' => $request->detail
        ];
        Todo::where('id', $id)->update($update);
        $todos = Todo::all();
        return response()->json($todos);
    }
}