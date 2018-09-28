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
            $public,
            $php;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($username, $appname, $public, $php)
    {
        $this->username = $username;
        $this->appname = $appname;
        $this->public = $public;
        $this->php = $php;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $phpv = 'unix:/var/run/php/php7.2-fpm.sock';

        if($this->php == '1'){
            $phpv = 'unix:/var/run/php/php7.2-fpm.sock';
        }elseif($this->php == '2'){
            $phpv = 'unix:/var/run/php/php7.1-fpm.sock';
        }elseif($this->php == '3'){
            $phpv = 'unix:/var/run/php/php7.0-fpm.sock';
        }elseif($this->php == '4'){
            $phpv = 'unix:/var/run/php/php5.6-fpm.sock';
        }elseif($this->php == '9'){
            $phpv = '127.0.0.1:9000;';
        }

        $process = new Process("python3.5 /var/www/html/default/app/exec/setup.py {$this->username} {$this->appname} {$this->public} {$phpv}");
        $process->run();
    }
}
