<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['domain', 'project_id'];

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
