<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Site;
use App\Models\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $usuario = User::find($request->iduser);      
        $sitio = Site::find($request->idsite);
        Review::create([
            'id_site' => $sitio->id,
            'id_user' => $usuario->id,
            'score' => $request->score,
            'comment' => $request->comment
        ]);
        $site = Site::find($request->idsite);
        $reviews = Review::where('id_site', $request->idsite)->get();
        // $ola->save();
        // return redirect()->route('rev.show/'.$request->idsite.'?');
        return view('description',compact('site','reviews'));
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
        $site = Site::find($id);
        $reviews = Review::where('id_site', $id)->get();
        
        return view('description',compact('site','reviews'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
