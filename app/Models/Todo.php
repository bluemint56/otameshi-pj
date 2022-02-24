<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'content', 'created_at', 'updated_at'];

    public function getDetail()
    {
        $txt ='ID:'.$this->id . '' .$this->content;
        return $txt;
    }

    public function tags()
    {
        return $this->hasMany('App\Models\Tag', 'todos_id');
    }

}
