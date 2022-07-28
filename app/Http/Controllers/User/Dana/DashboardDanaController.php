<?php

namespace App\Http\Controllers\User\Dana;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardDanaController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.dana.index');
    }
}
