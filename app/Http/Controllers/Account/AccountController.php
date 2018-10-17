<?php

namespace App\Http\Controllers\Account;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\storeProfileFormRequest;

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
        $profile = $user->profile;

    	return view('dashboard.profile.edit', compact('user', 'profile'));
    }

    public function store(storeProfileFormRequest $request)
    {
        if($request->user()->profile()->count()){
            $request->user()->profile()->update([
                'phone' => $request->phone,
                'company' => $request->company,
                'address' => $request->address,
            ]);
        }else{
            $profile = new Profile;

            $profile->phone = $request->phone;
            $profile->company = $request->company;
            $profile->address = $request->address;

            $profile->user()->associate($request->user());
            $profile->country_id = 1;

            $profile->save();
        }

        $request->user()->update(['name' => $request->name]);

        return back()->withSuccess('Profile successfully updated');
    }
}
