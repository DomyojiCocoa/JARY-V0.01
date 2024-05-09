<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $sitio = Site::find($request->idsite);
        Review::create([
            'id_site' => $sitio->id,
            'id_user' => Auth::user()->id,
            'username' => Auth::user()->name,
            'score' => $request->score,
            'comment' => $request->comment
        ]);
        $site = Site::find($request->idsite);
        $reviews = Review::where('id_site', $request->idsite)->get();
        return view('description',compact('site','reviews'));
        // return redirect()->route('rev.show',compact('site','reviews'));
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
