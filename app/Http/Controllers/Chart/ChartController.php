<?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //Chart-js route controller
    public function chartJs(){
        return view('pages.chart.chart-js');
    }

    //Chart-js route controller
    public function chartflot(){
        return view('pages.chart.chart-flot');
    }

    //Chart-js route controller
    public function chartInline(){
        return view('pages.chart.chart-inline');
    }

    //Chart-js route controller
    public function chartUplot(){
        return view('pages.chart.chart-uplot');
    }
}
