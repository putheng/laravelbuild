<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(Project $project)
    {
    	return view('application.setting.index', compact('project'));
    }

    public function destroy(Request $request, Project $project)
    {
    	dd($request->appname);
    }

    public function upgrade(Project $project)
    {
    	return view('application.setting.upgrade', compact('project'));
    }
}
