<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller 
{
    public function create()
    {
        $user = User::create([
            'name' => 'anais',
            'email' => env('USER_ADMIN_EMAIL'),
            'password' => 'anais'
        ]);
    }
}