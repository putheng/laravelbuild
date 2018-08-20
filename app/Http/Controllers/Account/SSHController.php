<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SSHController extends Controller
{
    public function index()
    {
    	return view('dashboard.ssh.index');
    }

    public function generate()
    {
    	return view('dashboard.ssh.generate');
    }

    public function view()
    {
    	return view('dashboard.ssh.view');
    }
}
