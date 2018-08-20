<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index()
    {
    	return view('application.ssl.index');
    }

    public function generate()
    {
    	return view('application.ssl.generate');
    }
}
