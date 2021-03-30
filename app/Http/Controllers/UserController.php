<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::orderBy( 'id', 'desc')->paginate(3);

        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'city' => 'required',
        ]);    
        
        $user= new User();
        $user->user=$request->user;
        $user->city=$request->city;
        $user->save();
        return redirect()->route('users.index')
        ->with('success','Usuario creado.');

        // User::create($request->all());

        // return redirect()->route('users.index')
        // ->with('success','Usuario creado.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'user' => 'required',
            'city' => 'required',
        ]);
        $user->update($request->all());
  
        return redirect()->route('users.index')
                        ->with('success','Usuario actualizado');
    }


    public function destroy(User $user)
    {
        $user->delete();
  
        return redirect()->route('users.index')
                        ->with('success','Usuario eliminado');
    }
}
