<?php

namespace App\Http\Controllers\Admin;

use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Realisation::all();
        $page_title = "Mes réalisations";
        $button_create_title = "Nouvelle réalisation";
        $item_type = 'realisation';

        return view('admin.commun.list', compact('items', 'page_title', 'button_create_title', 'item_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Nouvelle réalisation";
        $mode = "creation";
        $item_type = "realisation";

        return view('admin.commun.single', compact('page_title', 'mode', 'item_type'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:600',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image_description' => 'required|string|max:255',
            'price' => 'numeric|required|regex:/^\d+(\.\d{1,2})?$/',
            'active' => 'nullable|boolean'
        ]);

        if ($request->active === null) {
            $datas['active'] = true;
        }

        $realisation = Realisation::create($datas + [
            'image_id' => 1
        ]);

        // $file = $request->file($request->image);
        // $fileName = $file->getClientOriginalName();
        // $path = Storage::put(time() . '.jpg', $request->image_url);

        return redirect( route('admin.realisations.index') )
            ->with('status', 'Nouvelle réalisation enregistrée');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        $page_title = "Editer la réalisation";
        $mode = "edition";
        $item_type = 'realisation';
        $item = $realisation;

        return view('admin.commun.single', compact('page_title', 'item', 'mode', 'item_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisation $realisation)
    {
        $datas = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:600',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image_description' => 'required|string|max:255',
            'price' => 'numeric|required|regex:/^\d+(\.\d{1,2})?$/',
            'active' => 'sometimes|regex:/^on$/'

        ]);

        if (!isset($request->active)) {
            $datas['active'] = 0;
        } else {
            $datas['active'] = 1;
        }

        $realisation->update($datas + [
            'image_id' => 1
        ]);

        return redirect( route('admin.realisations.edit', ['realisation' => $realisation->id]) )
            ->with('status', 'Réalisation mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        $realisation->delete();

        return redirect( route('admin.realisations.index') )->with('status', 'La réalisation a été supprimée.');
    }
}
