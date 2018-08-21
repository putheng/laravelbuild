<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
