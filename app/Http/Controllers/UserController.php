<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('user.index', compact('user'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}
