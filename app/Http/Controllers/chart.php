<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chart extends Controller
{
    public function bar()
    {
        return view('admin.chart.bar');
    }
    public function pie()
    {
        return view('admin.chart.pie');
    }
}
