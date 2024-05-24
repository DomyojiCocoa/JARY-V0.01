<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users',compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ])->assignRole($request->rol);

        return redirect()->route('user.index');
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
        $user = User::find($id);

        return view('editar',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,String $id)
    {
        $user = User::find($id);
        $user->syncRoles([$request->rol]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index');
    }

}
