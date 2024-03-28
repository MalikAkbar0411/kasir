<?php

namespace App\Http\Controllers;

use App\Charts\pendapatBulananChart;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (pendapatBulananChart $chart) 
    {
        $data['chart'] = $chart->build();
        return view('layouts.dashboard', $data);
    }
}
