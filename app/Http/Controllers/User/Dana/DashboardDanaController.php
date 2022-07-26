<?php

namespace App\Http\Controllers\User\Dana;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDanaController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.dana.index');
    }
}
