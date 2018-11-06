<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
        $mysql = config('database.connections.mysql.username') ." ". config('database.connections.mysql.password') ." ". config('database.connections.mysql.database');

        $process = new Process("python3.5 /var/www/html/default/app/exec/mysql.py {$this->userid} {$this->appid} {$mysql}");
        $process->run();
    }
}
