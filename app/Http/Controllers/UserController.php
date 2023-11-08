<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $valid = Profile::where('is_valid', 1)->count();
        $novalid = Profile::where('is_valid', 0)->count();

        $user = Profile::with('user','kecamatan')->where('NRA','!=',null)
            ->latest()->get();
        return view('admin.index', compact('user','valid','novalid'));
    }
}
