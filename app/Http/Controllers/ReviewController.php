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
        // foreach ($reviews as $key => $value) {
        //     # code...
        // }
        // $users = array();
        $users = [];
        for ($i=0; $i < $reviews->count() ; $i++) { 
            echo($reviews[$i]->id_user );
            $users = User::find($reviews[$i]->id_user);
            // list(User::where('id', $reviews[$i]->id_user)->get()->id) = $users;
        }
        // echo($users);
        // print_r($users);
        // $users = User::where('id', $reviews->id_user)->get();

        // $users = Review::where('id_user',$reviews->id_user);
        
        
        return view('description',compact('site','reviews','users'));
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
