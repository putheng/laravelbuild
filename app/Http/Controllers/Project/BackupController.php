<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackupController extends Controller
{
    public function index(Project $project)
    {
    	return view('application.backup.index', compact('project'));
    }
}
