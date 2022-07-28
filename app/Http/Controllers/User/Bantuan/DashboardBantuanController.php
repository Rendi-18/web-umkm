<?php

namespace App\Http\Controllers\User\Bantuan;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBantuanController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.bantuan.index',
            [
                'bantuans' => Bantuan::all()
            ]
        );
    }
}
