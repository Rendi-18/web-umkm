<?php

namespace App\Http\Controllers\User\Bantuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBantuanController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.bantuan.index');
    }
}
