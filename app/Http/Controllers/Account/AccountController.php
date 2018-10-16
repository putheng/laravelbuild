<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index(Request $request)
    {
    	$user = $request->user();
    	return view('dashboard.profile.index', compact('user'));
    }

    public function edit(Request $request)
    {
    	$user = $request->user();
    	return view('dashboard.profile.edit', compact('user'));
    }
}
