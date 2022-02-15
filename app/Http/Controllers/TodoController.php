<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function add()
    {
        return view('create');
    }
    public function edit()
    {
        return view('update');
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
