<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    public function index()
    {
    	return view('dashboard.billing.index');
    }
}
