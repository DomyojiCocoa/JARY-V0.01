<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======
use App\Models\Review;
use App\Models\User;
use App\Http\Controllers\UserController;
>>>>>>> yeison

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();
        // return $sites;
<<<<<<< HEAD
        return view('tests', compact('sites'));
=======
        return view('admin.sites', compact('sites'));
>>>>>>> yeison
    }

    /**
     * Show the form for creating a new resource.
     */
<<<<<<< HEAD
    public function create()
    {
        //
=======
    public function create(Request $request)
    {
        $sitio = Site::create([
            'name_site' => $request->name,
            'address' => $request->address,
            'schedule_open' => $request->hora ,
            'schedule_close' => $request->horasalida,
            'weather_preferable' => $request->climas,
            'url_img' => $request->url_foto,
            'url_map' => $request->url_map
        ]);
        $sitio->save();
        return redirect()->route('site.index');
>>>>>>> yeison
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {

        $Site = Site::find($request->id);
        $Site->schedule = $request->hora . ' '.  $request->horasalida;
        $Site->save();

        return redirect()->route('site.index');
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
        //
=======
    public function destroy(Request $request, Site $sitio)
    //
    {
        Site::find($request->id)->delete();

        // return $request;
        // $sitio->delete();
        return redirect()->route('site.index');
    }
    
    public function catalogue()
    {
        $sites = Site::all();

        return view('allsites',compact('sites'));
>>>>>>> yeison
    }
}
