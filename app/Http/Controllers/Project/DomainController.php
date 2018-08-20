<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomainController extends Controller
{
    public function index()
    {
    	return view('application.domain.index');
    }
}
