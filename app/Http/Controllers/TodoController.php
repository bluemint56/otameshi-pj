<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $todos = Todo::all();
        $todos = Todo::Paginate(5);
        $param = ['todos' => $todos, 'user' => $user];
        return view('index', $param);
    }
    public function add()
    {
        $todos = Todo::all();
        $todos = Todo::simplePaginate(5);
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
        $todos = Todo::simplePaginate(5);
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
        $todos = Todo::simplePaginate(5);
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
        $todos = Todo::whereDate('updated_at', $request->updated_at)->get();
        $data = [
            'input' => $request->updated_at,
            'todos' => $todos
        ];
        return view('search', ['todos' => $todos ]);
    }
    public function login(Request $request)
    {
        $text = ['text' => 'ログインしてください'];
        return view('login', $text);
    }
    public function logincheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return redirect('/home');
        } else {
            $text = 'ログインに失敗しました';
        }
        return view('login', ['text' => $text]);
    }
    public function relate(Request $request)
    {
        $todos = Todo::all();
        $todos = Todo::simplePaginate(5);
        return view('tag.relation', ['todos' => $todos]);
    }

}

