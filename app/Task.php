<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";

    protected $fillable = ['content', 'user_id', 'list_id', 'complete'];

    public function taskList()
    {
    	return $this->belongsTo('\App\ListModel');
    }

    public function user()
    {
    	return $this->belongsTo('\App\User');
    }
}
