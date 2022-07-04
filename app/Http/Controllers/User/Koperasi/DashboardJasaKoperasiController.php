<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\JasaKoperasi;
use Illuminate\Http\Request;
use App\Models\Koperasi;

class DashboardJasaKoperasiController extends Controller
{
    // GET
    public function index(JasaKoperasi $jasaKoperasi, Koperasi $koperasi)
    {
        return view('dashboard.pages.koperasi-jasa.index', [
            'jasaKoperasi' => $jasaKoperasi,
            'koperasi' => $koperasi,
        ]);
    }
}
