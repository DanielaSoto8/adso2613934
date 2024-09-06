<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $users = User::paginate(5);
        return view('users.index')->with('users', $users);
      
    }

     
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        if($request->hasFile('photo')) {
            $photo =time() . '.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        }

        $user = new User;
        $user->document = $request->document;
        $user->fullname = $request->fullname;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->photo = $photo;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
       

        if ($user->save()) {
            return redirect('users')->with('message', 'The user: '. $user->fullname. 'was successfully added');
        }
    }

    


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //dd($user->toArray());
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        if ($request->hasFile('photo')) {
            if($request->hasFile('photo')) {
                $photo =time() . '.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }
        } else {
            $photo = $request->originphoto;
        }

            $user->document = $request->document;
            $user->fullname = $request->fullname;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->photo = $photo;
            $user->phone = $request->phone;
            $user->email = $request->email;

        if ($user->save()) {
            return redirect('users')->with('message', 'The user: '. $user->fullname. 'was successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->delete()) {
            return redirect('users')->with('message', 'The user:'. $user->fullname . 'was successfully deleted!');
        }
    }

    public function search(Request $request){
        $users = User::names($request->q)->paginate(20);
        return view('users.search')->with('users', $users);
    }

    public function pdf() {
        $users = User::all();
        $pdf = PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('allusers.pdf');
    }
    public function excel() {
        return Excel::download(new UserExport, 'allusers.xlsx');
    }
}