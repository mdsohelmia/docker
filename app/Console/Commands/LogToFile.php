<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class LogToFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:write';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->comment('Writhing something.');
        $fiel = __DIR__ . DIRECTORY_SEPARATOR . 'hello.text';
        file_put_contents($fiel, 'Sohe Mia', FILE_APPEND);
    }
}
