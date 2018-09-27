<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Models\Plan;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProcessDatabase implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $userid,
            $appid;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userid, $appid)
    {
        $this->userid = $userid;
        $this->appid = $appid;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $plan = new Plan;

        $plan->name = 'xxx';
        $plan->price = '10';
        $plan->live = 1;

        $plan->save();

        //$process = new Process("python3.5 /home/vagrant/sites/laravelbuild/app/exec/test.py {$this->userid} {$this->appid}");
        //$process->run();
    }
}
