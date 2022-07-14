<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use App\Models\Pegawai;
use App\Models\Product;
use App\Models\Umkm;
use App\Models\Website;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'umkms' => Umkm::orderBy('created_at', 'desc')->take(8)->get(),
            'koperasis' => Koperasi::orderBy('created_at', 'desc')->take(8)->get(),
            'website' => Website::latest()->get(),
            'pegawais' => Pegawai::latest()->take(4)->get()
        ]);
    }
    public function searchUmkm()
    {
        $umkms = Umkm::latest();

        if (request('search')) {
            $umkms->where('name', 'like', '%' . request('search') . '%')
                ->orwhere('description', 'like', '%' . request('search') . '%')
                ->orwhere('address', 'like', '%' . request('search') . '%');
        }

        return view('pages.search.umkm', [
            'umkms' => $umkms->paginate(12)->withQueryString()
        ]);
    }

    public function searchKoperasi()
    {
        $koperasis = Koperasi::latest();

        if (request('search')) {
            $koperasis->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.search.koperasi', [
            'koperasis' => $koperasis->paginate(12)->withQueryString()
        ]);
    }

    public function umkm(Umkm $umkm)
    {
        return view('pages.umkm', [
            'umkm' => $umkm,
        ]);
    }
}
