<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use Illuminate\Http\Request;

class DashboardKoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $koperasis = Koperasi::latest();

        if (request('search')) {
            $koperasis->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view(
            'dashboard.pages.koperasi',
            [
                'koperasi' => $koperasis->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function show(Koperasi $koperasi)
    {
        // return view('dashboard.pages.Koperasi-profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Koperasi $koperasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Koperasi $koperasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koperasi $koperasi)
    {
        Koperasi::destroy($koperasi->id);

        return redirect('/dashboard/koperasi')->with('success', 'Koperasi telah dinonaktifkan');
    }
}
