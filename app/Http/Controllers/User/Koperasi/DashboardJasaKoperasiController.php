<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\JasaKoperasi;
use Illuminate\Http\Request;

class DashboardJasaKoperasiController extends Controller
{
    // GET
    public function index(JasaKoperasi $jasaKoperasi)
    {
        return view('dashboard.pages.koperasi-product.index', [
            'jasaKoperasi' => $jasaKoperasi
        ]);
    }
}
