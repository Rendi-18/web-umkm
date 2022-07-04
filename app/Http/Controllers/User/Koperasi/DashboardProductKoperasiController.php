<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\ProductKoperasi;
use Illuminate\Http\Request;


class DashboardProductKoperasiController extends Controller
{
    // GET
    public function index(ProductKoperasi $productKoperasi)
    {
        return view('dashboard.pages.koperasi-product.index', [
            'productKoperasi' => $productKoperasi,
        ]);
    }
}
