<?php

namespace App\Http\Controllers;

use App\Models\train;
use App\Models\Train as ModelsTrain;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = ModelsTrain::all();
        // return view('pages.home');
        dd($trains);
    }
}
