<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'umkms' => Umkm::orderBy('created_at', 'desc')->take(8)->get(),
            'koperasis' => Koperasi::orderBy('created_at', 'desc')->take(8)->get()
        ]);
    }
    public function search()
    {
        $umkms = Umkm::latest();

        if (request('search')) {
            $umkms->where('name', 'like', '%' . request('search') . '%')
                ->orwhere('description', 'like', '%' . request('search') . '%')
                ->orwhere('address', 'like', '%' . request('search') . '%');
        }

        return view('pages.search', [
            'umkms' => $umkms->paginate(12)->withQueryString()
        ]);
    }
    public function umkm(Umkm $umkm)
    {
        return view('pages.umkm', [
            'umkm' => $umkm,
        ]);
    }
}
