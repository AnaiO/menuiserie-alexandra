<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createadmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create a user admin of the site';

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
        $user = User::create([
            'name' => 'anais',
            'email' => env('USER_ADMIN_EMAIL'),
            'password' => Hash::make('anais')
        ]);
    }
}
