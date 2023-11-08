<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $valid = Profile::where('is_valid', 1)->count();
        $novalid = Profile::where('is_valid', 0)->count();
        return view('content_dashboard',compact('valid','novalid'));
    }
}
