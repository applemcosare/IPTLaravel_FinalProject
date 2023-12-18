<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve users from the database or any other data source
        $users = User::all();

        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'FirstName'     => 'required',
            'LastName'      => 'required',
            'Email'         => 'required|email',
            'Address'       => 'required',
            'Phone'         => 'required',
        ]);

        User::create([
            'FirstName'     => $request->FirstName,
            'LastName'      => $request->LastName,
            'Email'         => $request->Email,
            'Address'       => $request->Address,
            'Phone'         => $request->Phone,
        ]);

        return redirect('/users')->with('info','A new buyer has been added');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'id'             => 'required',
            'FirstName'      => 'required',
            'LastName'       => 'required',
            'Email'          => 'required',
            'Address'        => 'required',
            'Phone'          => 'required',
        ]);

        $user->update($request->all());
        return redirect('/users')->with('info', "$user->FirstName has been updated" );
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/users')->with('info', "$user->FirstName has been deleted" );

    }
}
