<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Umkm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.index',
            [

                'umkms' => Umkm::latest()->get()
            ]
        );
    }
}
