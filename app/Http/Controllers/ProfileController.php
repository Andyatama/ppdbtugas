<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();

        return view('profile.index', compact('profile'));
    }

    public function show($id)
    {
        $profile = Profile::find($id);
       
        return response()->json($profile);
    }
}
