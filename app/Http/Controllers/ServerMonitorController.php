<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerMonitorController extends Controller
{
    public function index()
    {
        return view('server-monitor.index');
    }

    public function create()
    {
        return view('server-monitor.create');
    }
}
