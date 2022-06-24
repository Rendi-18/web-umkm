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
        return view('pages.search', [
            'umkms' => Umkm::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }
}
