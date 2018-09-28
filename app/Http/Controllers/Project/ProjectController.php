<?php

namespace App\Http\Controllers\Project;

use App\User;
use App\Models\Plan;
use App\Models\Project;
use App\Jobs\{ProcessHost, ProcessDatabase};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreProjectFormRequest;

class ProjectController extends Controller
{
    public function new()
    {
    	return view('application.new');
    }

    public function detail(Project $project, Request $request)
    {
    	return view('application.detail', compact('project'));
    }

    public function StartUp()
    {
        return $this->Programmer();
    }

    public function store(StoreProjectFormRequest $request)
    {

        $username = str_slug($request->user()->username);
        $appname = str_slug($request->name);
        $apptyle = $request->app_version;

        $project = new Project;

        $project->name = $request->name;
        $project->description = $request->description;
        $project->user()->associate($request->user());

        $public = '';

        $project->subdomain = $appname;
        $project->gitname = $appname;
        $project->plan_id = $request->plan;

        $project->php_id = $request->php_version;
        $project->type = $apptyle;
        $project->directory = $appname . '-'. $username;

        $project->save();

        if($apptyle == 'laravel'){
            $public = 'public';
        }

        ProcessDatabase::dispatch(auth()->id(), $project->id);
        ProcessHost::dispatch($username, $appname, $public, $request->php_version);

        return redirect()->route('app.manage.detail', $project);
        
    }

}
