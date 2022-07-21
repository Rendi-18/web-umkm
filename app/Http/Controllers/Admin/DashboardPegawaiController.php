<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPegawaiController extends Controller
{

    // Index GET
    public function index()
    {

        $pegawais = Pegawai::latest();

        if (request('search')) {
            $pegawais->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view('dashboard.pages.pegawai.index', [
            'pegawais' => $pegawais->get()
        ]);
    }

    // Create GET
    public function create()
    {
        return view('dashboard.pages.pegawai.create', [
            'pegawais' => Pegawai::latest()->get()
        ]);
    }

    // Store POST
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'nip' => 'required',
            'classification' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('pegawai');
        }
        Pegawai::create($validatedData);

        return redirect('/dashboard/pegawai')->with('success', 'New Pegawai has been added!');
    }

    // Edit GET
    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.pages.pegawai.edit', [
            'pegawai' => $pegawai
        ]);
    }

    // Update PUT
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'name' => 'required',
            'position' => 'required',
            'nip' => 'required',
            'description' => 'required',
            'classification' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('pegawai');
        }


        Pegawai::where('id', $pegawai->id)
            ->update($validatedData);

        return redirect('/dashboard/pegawai')->with('success', 'Pegawai has been Updated');
    }

    // Delete DELETE
    public function destroy(Pegawai $pegawai)
    {
        if ($pegawai->image) {
            Storage::delete($pegawai->image);
        }
        Pegawai::destroy($pegawai->id);
        return redirect('/dashboard/pegawai')->with('success', 'Pegawai telah dihapus');
    }
}
