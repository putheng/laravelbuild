<?php

namespace App\Models;

use App\User;
use App\Models\Database;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
		'name',
		'subdomain',
		'gitname',
		'description',
		'plan',
		'php',
		'type',
		'directory'
	];

    public function getDatabase()
    {
        return Database::where('project_id', $this->id)->first();
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function plan()
    {
    	return $this->hasOne(Plan::class);
    }
    
}
