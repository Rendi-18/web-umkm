<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use App\Models\Izin;
use App\Models\Koperasi;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPengajuanController extends Controller
{
    public function index()
    {
        $izins = Izin::latest();
        $umkms = Umkm::latest();
        $bantuans = Bantuan::latest();

        if (request('search')) {
            $izins->where('name', 'like', '%' . request('search') . '%')->get();
        }
        if (request('searchUmkm')) {
            $umkms->where('name', 'like', '%' . request('searchUmkm') . '%')->get();
        }
        if (request('searchBantuan')) {
            $bantuans->where(Auth::user()->umkm->name, 'like', '%' . request('searchBantuan') . '%')->get();
        }

        return view('dashboard.pages.pengajuan.index', [
            'umkms' => $umkms->get(),
            'izins' => $izins->get(),
            'bantuans' => $bantuans->get()
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

        return redirect('/dashboard/pengajuan')->with('success', 'UMKM has been Updated');
    }


    public function aprovedKoperasi(Request $request, Koperasi $koperasi)
    {
        $rules = [
            'status' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = $koperasi->id;

        Koperasi::where('id', $koperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('success', 'Kooperasi has been Updated');
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

    public function bantuan(Request $request, Bantuan $bantuan)
    {
        // $file_name = $request->file->getClientOriginalName();

        $rules = [
            'status' => 'required',
            'accept' => 'file|max:2000',
        ];

        $validatedData = $request->validate($rules);
        if ($request->file('accept')) {
            if ($request->oldDoc) {
                Storage::delete($request->oldDoc);
            }
            $validatedData['accept'] = $request->file('accept')->store('doc/' . Auth::user()->username);
        }

        Bantuan::where('id', $bantuan->id)
            ->update($validatedData);

        return redirect('/dashboard/pengajuan')->with('success', 'Bantuan has been Updated');
    }
}
