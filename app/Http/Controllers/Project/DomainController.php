<?php

namespace App\Http\Controllers\Project;

use App\Models\{Project, Domain};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DomainFormRequest;

class DomainController extends Controller
{
    public function index(Project $project)
    {
    	return view('application.domain.index', compact('project'));
    }

    public function destroy(Project $project, Domain $domain)
    {
    	$domain->delete();

    	return back()->withSuccess('Successfully deleted');
    }

    public function store(DomainFormRequest $request, Project $project)
    {
    	$domain = new Domain;

    	$domain->domain = $request->domain;
    	$domain->project()->associate($project);
    	$domain->save();

    	return back()->withSuccess('Your new domain is now successfully added.');
    }
}
