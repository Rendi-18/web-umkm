<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Izin;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPengajuanController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.pengajuan.index', [
            'umkms' => Umkm::latest()->get(),
            'izins' => Izin::latest()->get()
        ]);
    }

    public function aproved(Request $request, Umkm $umkm)
    {
        $rules = [
            'status' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = $umkm->id;

        Umkm::where('id', $umkm->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('success', 'UMKM has been Updated');
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
}
