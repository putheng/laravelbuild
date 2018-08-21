<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProcessHost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $username,
            $appname,
            $public;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($username, $appname, $public)
    {
        $this->username = $username;
        $this->appname = $appname;
        $this->public = $public;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $process = new Process("python3.6 /home/vagrant/sites/laravelbuild/app/exec/setup.py {$this->username} {$this->appname} {$this->public}");
        $process->run();
    }
}
