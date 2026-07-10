<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store()
    {
        return view('pages.dashboard-settings');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function account()
    {
        // Logic for displaying account details
        return view('pages.dashboard-account');
    }
}
