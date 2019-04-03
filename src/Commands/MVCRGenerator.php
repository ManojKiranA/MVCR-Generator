<?php

namespace Manojkiran\MVCRGenerator;

use Illuminate\Console\Command;

class MVCRGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mvcr::generate {controlName : Class (singular) for example Post}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generated the Model Views and Controller for the laravel Application';
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo ' the initail stage has been passes';
    }
}
