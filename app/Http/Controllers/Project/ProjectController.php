<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function new()
    {
    	return view('application.new');
    }

    public function detail()
    {
    	return view('application.detail');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $app = $request->app_version;
        $php = $request->php_version;

    	//ProcessHost::dispatch($name, $description, $app);

        return back();
    }

}
