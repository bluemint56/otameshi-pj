<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }
    public function add()
    {
        $todos = Todo::all();
        return view('create', ['todos' => $todos]);
    }
    public function create(TodoRequest $request)
    {
        $validated = $request->validated();
        $todos = $request->all();
        Todo::create($todos);
        return redirect('/todo/create');
    }
    public function edit(Request $request)
    {
        $todos = Todo::all();
        return view('update', ['todos' => $todos]);
    }
    public function update(TodoRequest $request)
    {
        $todos = Todo::all();
        $validated = $request->validated();
        $todos = $request->all();
        unset($todos['_token']);
        Todo::where('id', $request->id)->update($todos);
        return redirect('/todo/update');
    }
    public function delete(Request $request)
    {
        $todos = Todo::all();
        return view('delete', ['todos' => $todos]);
    }
    public function remove(Request $request)
    {
        $todos = Todo::find($request->id)->delete();
        return redirect('/todo/delete');
    }
    public function find(Request $request)
    {
        $todos = Todo::all();
        return view('search', ['todos' => $todos]);
    }
    public function search(Request $request)
    {
        $todos = Todo::where('updated_at', 'LIKE',"%{$request->updated_at}%")->get();
        $data = [
            'input' => $request->updated_at,
            'todos' => $todos
        ];
        return redirect('/todo/find', ['todos' => $data]);
    }
    public function login()
    {
        return view('login');
    }
}
