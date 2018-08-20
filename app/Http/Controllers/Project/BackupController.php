<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackupController extends Controller
{
    public function index()
    {
    	return view('application.backup.index');
    }
}
