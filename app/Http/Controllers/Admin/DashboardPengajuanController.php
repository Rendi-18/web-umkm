<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use App\Models\Izin;
use App\Models\Koperasi;
use App\Models\Laporan;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPengajuanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::latest();
        $umkms = Umkm::latest();


        if (request('search')) {
            $laporans->where('description', 'like', '%' . request('search') . '%')->get();
        }
        if (request('searchUmkm')) {
            $umkms->where('name', 'like', '%' . request('searchUmkm') . '%')->get();
        }

        return view('dashboard.pages.pengajuan.index', [
            'umkms' => $umkms->get(),
            'laporans' => $laporans->get(),
        ]);
    }

    public function aprovedUmkm(Request $request, Umkm $umkm)
    {
        $rules = [
            'status' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = $umkm->id;

        Umkm::where('id', $umkm->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('successUMKM', 'UMKM has been Updated');
    }

    public function izin(Request $request, Izin $izin)
    {
        // $file_name = $request->file->getClientOriginalName();

        $rules = [
            'status' => 'required',
            'file' => 'file|max:2000',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = $izin->id;

        if ($request->file('file')) {
            if ($request->oldDoc) {
                Storage::delete($request->oldDoc);
            }
            $validatedData['file'] = $request->file('file')->store('doc/' . $izin->user->username);
        }

        Izin::where('id', $izin->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('success', 'Izin has been Updated');
    }

    public function laporan(Request $request, Laporan $laporan)
    {
        // $file_name = $request->file->getClientOriginalName();

        $rules = [
            'status' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Laporan::where('id', $laporan->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('success', 'Laporan has been Updated');
    }
}
