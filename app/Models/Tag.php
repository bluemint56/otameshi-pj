<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'tag', 'todos_id', 'created_at', 'updated_at'];

    public static $rules = array(
        'todos_id' => 'required',
        'tag' => 'required | max:20',
    );
    public function getTag(){
        return 'ID'.$this->id . ':' . $this->tag;
    }
    public function todo()
    {
        return $this->belongsTo('App\Models\Todo');
    }
}
