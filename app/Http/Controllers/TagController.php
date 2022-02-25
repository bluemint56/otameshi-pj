<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(Request $request) 
    {
        $tags = Tag::with('todo')->get();
        $tags = Tag::simplePaginate(4);
        return view('tag.index', ['tags' => $tags]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tags = $request->all();
        Tag::create($tags);
        return redirect('/tag');
    }
    public function update(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tags = $request->all();
        unset($tags['_token']);
        Tag::where('id', $request->id)->update($tags);
        return redirect('/tag');
    }
    public function delete(Request $request)
    {
        $tags = Tag::find($request->id);
        Tag::find($request->id)->delete();
        return redirect('/tag');
    }
}
