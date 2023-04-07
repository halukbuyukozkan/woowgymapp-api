<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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
}
