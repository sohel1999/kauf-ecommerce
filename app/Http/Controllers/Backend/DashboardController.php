<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * index method load  dashboard view
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }

}
