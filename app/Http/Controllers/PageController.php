<?php

namespace App\Http\Controllers;

use App\Models\train;
use App\Models\Train as ModelsTrain;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class PageController extends Controller
{
    public function index()
    {
        $today_trains = ModelsTrain::whereDate('departure_time', '=', date('Y-m-d'))->get();
        if (empty($today_trains)) abort(404);
        // $trains = ModelsTrain::all();
        return view('pages.home', compact('today_trains'));
        // dd($today_trains);
    }
}
