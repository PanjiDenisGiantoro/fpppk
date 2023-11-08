<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Profile::with('user','kecamatan')->where('NRA','!=',null)
            ->latest()->get();
        return view('admin.index', compact('user'));
    }
}
