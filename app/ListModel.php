<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
	protected $fillable = ['name', 'description', 'user_id'];
    protected $table = "lists";

    public function tasks()
    {
    	return $this->hasMany('\App\Task', 'list_id', 'id');
    }
}
