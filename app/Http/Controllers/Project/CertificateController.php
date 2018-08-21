<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index(Project $project)
    {
    	return view('application.ssl.index', compact('project'));
    }

    public function generate(Project $project)
    {
    	return view('application.ssl.generate', compact('project'));
    }
}
