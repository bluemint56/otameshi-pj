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
    public function delete()
    {
        return view('delete');
    }
    public function find()
    {
        return view('search');
    }
    public function login()
    {
        return view('login');
    }
}
