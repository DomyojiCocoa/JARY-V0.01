<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\User;
use App\Http\Controllers\UserController;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();
        // return $sites;
        return view('admin.sites', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
        $Site->name_site = $request->name;
        $Site->address = $request->address;
        $Site->schedule_open = strval($request->hora);
        $Site->schedule_close = strval($request->horasalida);
        $site->weather_preferable = $request->clima;
        $site->url_img = $request->url_foto;
        $site->url_map = $request->url_map;
        $Site->save();

        return redirect()->route('site.index');
    }

    /**
     * Remove the specified resource from storage.
     */
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
    }
}
