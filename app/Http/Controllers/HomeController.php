<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home', [
            'umkms' => Umkm::orderBy('created_at', 'desc')->take(6)->get()
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
            'umkms' => $umkms->paginate(8)->withQueryString()
        ]);
    }
}
