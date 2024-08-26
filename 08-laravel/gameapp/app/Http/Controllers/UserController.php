<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requets\UserRequest;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(20);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        dd($request->all());

        //uploadFile 
        if ($request->hasFile('photo')){
            $photo=time()  .'.'. $request->photo->extension();
            $request->photo->move(public_path('images'),$photo);
        }
        //NewUser
        $user= new User;
        $user=document = $request->document;
        $user=fullname = $request->fullname;
        $user=birthdate = $request->birthdate;
        $user=photo =$photo;


        if ($)
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
