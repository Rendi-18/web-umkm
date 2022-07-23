<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use App\Models\Pegawai;
use App\Models\Product;
use App\Models\Umkm;
use App\Models\Website;
use App\Models\Agenda;
use App\Models\JasaKoperasi;
use App\Models\ProductKoperasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'umkms' => Umkm::orderBy('created_at', 'desc')->where('status', 1)->take(8)->get(),
            'koperasis' => Koperasi::orderBy('created_at', 'desc')->where('status', 1)->take(8)->get(),
            'website' => Website::latest()->get(),
            'pegawais' => Pegawai::latest()->take(4)->get(),
            'agendas' => Agenda::latest()->take(4)->get()
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
            'umkms' => $umkms->where('status', 1)->paginate(12)->withQueryString()
        ]);
    }

    public function searchKoperasi()
    {
        $koperasis = Koperasi::latest();

        if (request('search')) {
            $koperasis->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.search.koperasi', [
            'koperasis' => $koperasis->where('status', 1)->paginate(12)->withQueryString()
        ]);
    }

    public function umkm(Umkm $umkm)
    {

        if ($umkm->status != 1) {
            abort(404);
        }
        return view('pages.umkm.index', [
            'umkm' => $umkm
        ]);
    }

    public function product(Product $product)
    {
        if ($product->umkm->status != 1) {
            abort(404);
        }
        return view('pages.umkm.product', [
            'product' => $product,
        ]);
    }


    public function koperasi(Koperasi $koperasi)
    {
        if ($koperasi->status != 1) {
            abort(404);
        }
        return view('pages.koperasi.index', [
            'koperasi' => $koperasi,
        ]);
    }

    public function jasaKoperasi(JasaKoperasi $jasaKoperasi)
    {
        if ($jasaKoperasi->koperasi->status != 1) {
            abort(404);
        }
        return view('pages.koperasi.jasa', [
            'jasaKoperasi' => $jasaKoperasi,
        ]);
    }

    public function productKoperasi(ProductKoperasi $productKoperasi)
    {
        if ($productKoperasi->koperasi->status != 1) {
            abort(404);
        }
        return view('pages.koperasi.product', [
            'productKoperasi' => $productKoperasi,
        ]);
    }

    public function pegawai()
    {
        $pegawais = Pegawai::latest();

        if (request('search')) {
            $pegawais->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view('pages.pegawai.index', [
            'pegawais' => $pegawais->paginate(6),
        ]);
    }

    public function pegawaiDetail(Pegawai $pegawai)
    {
        return view('pages.pegawai.detail', [
            'pegawai' => $pegawai,
        ]);
    }
}
