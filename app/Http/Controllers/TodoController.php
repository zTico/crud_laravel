<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TodoController extends Controller
{
  
    
    public function index()
    {
        
    }

    public function create()
    {
        return view('todo_create');
    }

 
    public function store(Request $request)
    {
        $res = new Todo();
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data submitted');
        return redirect('todo_show');
    }


    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr',Todo::all());
    }

  
    public function edit(Todo $todo, $id)
    {
         return view('todo_edit')->with('todoArr',Todo::find($id));
    }


    public function update(Request $request, Todo $todo)
    {
        $res =Todo::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data updated');
        return redirect('todo_show');
    }


    public function destroy(Todo $todo,$id)
    {   
        Todo::destroy(array('id', $id));
        return redirect('todo_show');
    }
}
