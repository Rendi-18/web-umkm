<?php


namespace App\Http\Controllers\User\Laporan;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardLaporanController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.laporan.index',
            [
                'bantuans' => Laporan::all()
            ]
        );
    }
    // store POST
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phonenumber' => 'required',
            'umkm_id' => 'required',
            'tahun' => 'required',
            'description' => 'required',
            'file' => 'file|max:2000',
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('doc/' . Auth::user()->username);
        }

        $validatedData['user_id'] = auth()->user()->id;
        Laporan::create($validatedData);

        return redirect('/dashboard/laporan')->with('success', 'New laporan has been added!');
    }
    public function edit(Laporan $laporan)
    {
        return view(
            'dashboard.pages.laporan.edit',
            [
                'kaporan' => $laporan,
                'umkms' => Umkm::all()
            ]
        );
    }
    // Edit PUT
    public function update(Request $request, Laporan $laporan)
    {
        $rules = [
            'phonenumber' => 'required',
            'umkm_id' => 'required',
            'tahun' => 'required',
            'description' => 'required',
            'file' => 'file|max:2000',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['umkm_id'] = $laporan->umkm->id;
        $validatedData['user_id'] = $laporan->user->id;

        // Image
        if ($request->file('file')) {
            if ($request->oldDoc) {
                Storage::delete($request->oldDoc);
            }
            $validatedData['file'] = $request->file('file')->store('doc/' . Auth::user()->username);
        }


        Laporan::where('id', $laporan->id)
            ->update($validatedData);

        return redirect('/dashboard/laporan')->with('success', 'Laporan has been updated!');
    }

    // Delete DELETE
    public function destroy(Laporan $laporan)
    {
        if ($laporan->file) {
            Storage::delete($laporan->file);
        }
        Laporan::destroy($laporan->id);
        return redirect('/dashboard/laporan')->with('success', 'Laporan telah dibatalkan');
    }
}
