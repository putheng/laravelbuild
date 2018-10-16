<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePasswordFormRequest;

class PasswordController extends Controller
{
    public function index()
    {
    	return view('dashboard.password.index');
    }

    public function store(StorePasswordFormRequest $request)
    {
    	$user = $request->user();

    	$user->password = Hash::make($request->password);
    	$user->save();

    	return redirect()->route('dashboard.index')
    		->withSuccess('Password was successfully updated');
    }
}
