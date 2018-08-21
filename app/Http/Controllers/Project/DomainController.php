<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomainController extends Controller
{
    public function index(Project $project)
    {
    	return view('application.domain.index', compact('project'));
    }
}
