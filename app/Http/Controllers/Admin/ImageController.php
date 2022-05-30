<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('admin.images.list');
    }

    public function create()
    {
        return view('admin.images.store');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
