<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use App\Http\Requests\StoreKoperasiRequest;
use App\Http\Requests\UpdateKoperasiRequest;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKoperasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKoperasiRequest $request)
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
        //
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
     * @param  \App\Http\Requests\UpdateKoperasiRequest  $request
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKoperasiRequest $request, Koperasi $koperasi)
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
        //
    }
}
