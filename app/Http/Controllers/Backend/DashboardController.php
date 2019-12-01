<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{

    /**
     * index method load  dashboard view
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }

}
