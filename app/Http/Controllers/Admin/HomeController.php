<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // verifier si logge, sinon retour login (mettre en place middleware de log)
        return view('admin.home');
    }
}
