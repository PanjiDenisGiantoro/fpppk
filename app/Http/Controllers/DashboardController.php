<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//
//        $user = Profile::with('user','kecamatan','kotas','desas','provinces')->where('NRA','!=',null)
//            ->latest()->get();
        $valid = Profile::where('is_valid', 1)->count();
        $novalid = Profile::where('is_valid', 0)->count();
        $user = User::with('profiles')->where('id', auth()->user()->id)->first();

        return view('content_dashboard',compact('user','valid','novalid'));
    }
}
