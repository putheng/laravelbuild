<?php

namespace App\ViewComposers;

use Auth;
use Illuminate\View\View;

class ApplicationViewComposer
{

    public function compose(View $view)
    {   
        $user = Auth::user();

        $projects = $user->projects()->orderBy('id', 'desc')->get();

        return $view->with('projects', $projects);
    }
}