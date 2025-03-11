<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Futtatja a migrációkat és a seedereket.';

    /**
     * Execute the console command.
     * 
     * @return int
     */
    public function handle()
    {
        $this->info('Migrációk futtatása...');
        Artisan::call('migrate');
        $this->info(Artisan::output());

        $this->info('Seedelés');
        Artisan::call('db:seed');
        $this->info(Artisan::output());

        return 0;
    }
}
