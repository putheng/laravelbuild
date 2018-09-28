<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ProjectExists implements Rule
{
    public $appname,
            $project;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($appname, $project)
    {
        $this->appname = $appname;
        $this->project = $project;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value == $this->project->name;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Appname is incorrect please re enter.';
    }
}
