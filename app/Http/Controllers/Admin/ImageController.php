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

        return redirect(route('admin.images.index'))->with('status', "L'image a bien été enregistrée.");
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect(route('admin.images.index'))->with('status', "L'image a bien été supprimée.");
    }

    /**
     * Changes the active status of the image
     * 
     * @param Image $image The image to be activate
     * or desactivate
     * 
     * @return void
     */
    public function changeStatus(Image $image)
    {
        if ($image->active === Image::VISIBLE) {
            $image->active = Image::INVISIBLE;
            $image->save();

            return redirect(route('admin.images.index'))->with('status', "L'image est maintenant en mode invisible.");

        } else {
            $image->active = Image::VISIBLE;
            $image->save();

            return redirect(route('admin.images.index'))->with('status', "L'image est maintenant en mode visible.");

        }
    }
}
