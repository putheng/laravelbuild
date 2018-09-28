<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use App\Jobs\ProjectDestroy;
use App\Rules\ProjectExists;
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
    	$this->validate($request, [
    		'appname' => [
    			'required',
    			new ProjectExists($request->appname, $project),
    		]
    	],['appname.required' => 'Please enter appname to delete!']
    	);

    	ProjectDestroy::dispatch($project);

    	return redirect()->route('dashboard.index')->withSuccess('Application was deleted.');
    }

    public function upgrade(Project $project)
    {
    	return view('application.setting.upgrade', compact('project'));
    }
}
