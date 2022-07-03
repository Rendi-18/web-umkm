<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use Illuminate\Http\Request;

class DashboardUserKoperasiController extends Controller
{
    // GET
    public function index(Koperasi $koperasi)
    {
        return view('dashboard.pages.koperasi-profile.index', [
            'koperasi' => $koperasi,
            // 'title' => 'profile'
        ]);
    }
}
