<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.index',
            [
                'users' => User::latest()->where('isAdmin', 0)->get()
            ]
        );
    }
}
