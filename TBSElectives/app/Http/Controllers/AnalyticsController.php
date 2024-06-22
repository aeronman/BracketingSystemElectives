<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    // request for analytics view
    public function showAnalytics(Request $request): View
    {
        return view('admin.analytics');
    }
}