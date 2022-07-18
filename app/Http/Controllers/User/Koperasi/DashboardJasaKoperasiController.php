<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\JasaKoperasi;
use Illuminate\Http\Request;
use App\Models\Koperasi;
use Illuminate\Support\Str;
use App\Models\ProductKoperasi;
use Illuminate\Support\Facades\Storage;

class DashboardJasaKoperasiController extends Controller
{

    // GET
    public function index(Koperasi $koperasi)
    {

        $id = $koperasi->id;
        $services = JasaKoperasi::where('koperasi_id', $id);

        if (request('search')) {
            $services->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view('dashboard.pages.koperasi-jasa.index', [
            'services' => $services->get(),
            'koperasi' => $koperasi
        ]);
    }

    // Create GET
    public function create(Koperasi $koperasi)
    {
        $this->authorize(ability: 'view', arguments: $koperasi);
        return view(
            'dashboard.pages.koperasi-jasa.create',
            [
                'koperasi' => $koperasi,
            ]
        );
    }

    // Create PUT
    public function store(Request $request, Koperasi $koperasi)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'service' => 'required',
            'needs' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/' . $koperasi->user->username . '/jasa_koperasi');
        }

        $validatedData['slug'] = Str::snake($request->name);
        $validatedData['koperasi_id'] = $koperasi->id;
        JasaKoperasi::create($validatedData);

        return redirect('/dashboard/koperasi/' . $koperasi->id . '/koperasi-jasa')->with('success', 'New Service has been added!');
    }

    // Edit GET
    public function edit(JasaKoperasi $jasaKoperasi)
    {
        $this->authorize(ability: 'view', arguments: $jasaKoperasi);
        return view('dashboard.pages.koperasi-jasa.edit', [
            'service' => $jasaKoperasi,
        ]);
    }

    // Edit PUT
    public function update(Request $request, JasaKoperasi $jasaKoperasi)
    {
        $rules = [
            'name' => 'required',
            'service' => 'required',
            'needs' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        if ($request->name != $jasaKoperasi->name) {
            $validatedData['slug'] = Str::snake($request->name);
        }
        $validatedData['koperasi_id'] = $jasaKoperasi->koperasi->id;

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/' . $jasaKoperasi->koperasi->user->username . '/jasa_koperasi');
        }


        JasaKoperasi::where('id', $jasaKoperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/koperasi/' . $jasaKoperasi->koperasi->id . '/koperasi-jasa')->with('success', 'Service has been Updated');
    }

    // Unggulan PUT
    public function isUnggulan(Request $request, JasaKoperasi $jasaKoperasi)
    {
        $rules = [
            'isUnggulan' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['koperasi_id'] = $jasaKoperasi->koperasi->id;

        JasaKoperasi::where('id', $jasaKoperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/koperasi/' . $jasaKoperasi->koperasi->id . '/koperasi-jasa')->with('successUnggulan', 'Service has been edit');
    }

    // Delete DELETE
    public function destroy(JasaKoperasi $jasaKoperasi)
    {
        if ($jasaKoperasi->image) {
            Storage::delete($jasaKoperasi->image);
        }
        JasaKoperasi::destroy($jasaKoperasi->id);
        return redirect('/dashboard/koperasi/' . $jasaKoperasi->koperasi->id . '/koperasi-jasa')->with('success', 'Service telah dihapus');
    }
}
