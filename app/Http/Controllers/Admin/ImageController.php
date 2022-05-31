<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        // dd($images);
        return view('admin.images.list', compact('images'));
    }

    public function create()
    {
        return view('admin.images.store');
    }

    public function store(Request $request)
    {
        //validation
        $path = $request->file('image_url')->store('work', 'public');
        // dd($path);

        $image = Image::create([
            'url' => $path,
            // 'description' =>,
            // 'active' =>,
    
        ]);

        return view('admin.images.list')->with('status', "L'image a bien été enregistrée.");
    }
}
