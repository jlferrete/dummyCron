<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;

class DummyCron extends Command
{
    protected $signature = 'dummy:cron';
    protected $description = 'Dummy Cron Job Application';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        \Log::info("Running!");
    }
}
