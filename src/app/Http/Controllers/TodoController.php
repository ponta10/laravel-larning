<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo ;

class TodoController extends Controller
{
    //
    public function index () 
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function show(Int $id)
    {
      $todo = Todo::find($id);
      return response()->json($todo);
    }

    public function create (Request $request) 
    {
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->detail = $request->input('detail');
        $todo->save();
        return response()->json(Todo::all());
    }

    public function delete(Int $id)
  {
    Todo::find($id)->delete();
    return response()->json(Todo::all());
  }

  public function update(Int $id, Request $request)
  {
    $todo = Todo::find($id);
    $todo->title = $request->input('title');
    // $todo->detail = $request->input('detail');
    $todo->save();
    return response()->json($todo);
  }

}
