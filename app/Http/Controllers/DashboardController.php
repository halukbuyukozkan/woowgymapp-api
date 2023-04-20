<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $lungCapacityDates = $user->lungcapacities->pluck('created_at')->map(function ($item) {
            return Carbon::parse($item)->format('d-m-Y');
        })->toArray();

        $strengthDates = $user->strengths->pluck('created_at')->map(function ($item) {
            return Carbon::parse($item)->format('d-m-Y');
        })->toArray();



        return view('dashboard',compact('user','lungCapacityDates','strengthDates'));
    }

    public function changeLocal($locale)
    {
        if (array_key_exists($locale, Config::get('languages'))) {
            Session::put('applocale', $locale);
        }
        return Redirect::back();
    }
}
