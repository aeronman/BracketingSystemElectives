<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    //

    public function index()
    {
        return view('admin/analytics');
    }
}