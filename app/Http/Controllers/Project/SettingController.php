<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
    	return view('application.setting.index');
    }

    public function upgrade()
    {
    	return view('application.setting.upgrade');
    }
}
