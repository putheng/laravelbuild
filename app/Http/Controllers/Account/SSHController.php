<?php

namespace App\Http\Controllers\Account;

use App\Models\SSH;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SSHStoreFormRequest;

class SSHController extends Controller
{
    public function index(Request $request)
    {
        $keys = $request->user()->ssh()->get();

    	return view('dashboard.ssh.index', compact('keys'));
    }

    public function store(SSHStoreFormRequest $request)
    {
        $ssh = new SSH;

        $ssh->name = $request->name;
        $ssh->key = $request->key;
        $ssh->user()->associate($request->user());

        $ssh->save();

        return redirect()->route('dashboard.ssh.index')->withSuccess('SSH key successfully submitted.');
    }

    public function generate()
    {
    	return view('dashboard.ssh.generate');
    }

    public function view(SSH $ssh)
    {
    	return view('dashboard.ssh.view', compact('ssh'));
    }

    public function update(SSHStoreFormRequest $request, SSH $ssh)
    {
        $ssh->name = $request->name;
        $ssh->key = $request->key;
        $ssh->save();

        return redirect()->route('dashboard.ssh.index')->withSuccess('SSH key successfully updated.');
    }
}
