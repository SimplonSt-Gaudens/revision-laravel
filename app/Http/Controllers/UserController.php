<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function get()
    {
    	$users = User::all();
    	return view('users.index', compact('users'));
    }

    public function show($id)
    {
    	$user = User::findOrFail($id);
    	return view('users.show', compact('user'));
    }
}
