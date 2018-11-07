<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SSH extends Model
{
	protected $table = 'sshs';

    protected $fillable = ['titile', 'key', 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
