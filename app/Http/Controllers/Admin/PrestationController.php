<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prestation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestations = Prestation::all();

        return response()->view('admin.prestations.list', [
            'prestations' => $prestations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.prestations.single');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * 2 
         * 3 enregistrer limage dans un try and catch
         * 4 
         * 5 rediriger vers show ou list
         * 6) gerer les erreurs ou le succes
         */
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

        $prestation = Prestation::create($datas + [
            'image_id' => 1
        ]);

        // $file = $request->file($request->image);
        // $fileName = $file->getClientOriginalName();
        // $path = Storage::put(time() . '.jpg', $request->image_url);

        return redirect( route('admin.prestations.create') )
            ->with('status', 'Nouvelle prestation enregistrée');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Prestation $prestation)
    // {
    //     return response()->view('admin.prestations.show', [
    //         'prestation' => $prestation
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestation $prestation)
    {   
        return response()->view('admin.prestations.single', [
            'prestation' => $prestation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestation $prestation)
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

        $prestation->update($datas + [
            'image_id' => 1
        ]);

        // dd($prestation);
        // $prestation->save();

        return redirect( route('admin.prestations.edit', ['prestation' => $prestation->id]) )
            ->with('status', 'Prestation mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestation $prestation)
    {
        $prestation->delete();

        return redirect( route('admin.prestations.index') )->with('status', 'La prestation a été supprimée.');
    }
}
