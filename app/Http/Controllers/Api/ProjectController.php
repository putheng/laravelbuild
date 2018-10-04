<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\Api\ProjectValidationRule;

class ProjectController extends Controller
{
    public function validateApp(Request $request, User $user)
    {
    	
    	$this->validate($request, [
    		'name' => [
    			'min:3',
    			'max:30',
    			new ProjectValidationRule($user),
    		],
    	]);
    }
}
