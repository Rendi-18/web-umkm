<?php

namespace App\Http\Controllers\User\Izin;

use App\Http\Controllers\Controller;
use App\Models\CategoryIzin;
use App\Models\CategoryKoperasi;
use Illuminate\Support\Str;
use App\Models\Izin;
use App\Models\Koperasi;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserIzinController extends Controller
{
    // Surat GET
    public function surat()
    {


        $id = Auth::user()->id;
        $izins = Izin::where('user_id', $id);

        if (request('search')) {
            $izins->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view('dashboard.pages.izin.index', [
            'izins' => $izins->get(),
            'categories' => CategoryIzin::all()
        ]);
    }

    // suratStore POST
    public function suratStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nib' => 'required',
            'phonenumber' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Izin::create($validatedData);

        return redirect('/dashboard/izin/surat')->with('success', 'New Surat has been added!');
    }

    // Delete DELETE
    public function suratDestroy(Izin $izin)
    {
        Izin::destroy($izin->id);
        return redirect('/dashboard/izin/surat')->with('success', 'Surat telah dihapus');
    }

    // Umkm GET
    public function umkm()
    {
        return view('dashboard.pages.register.umkm', []);
    }

    // umkmStore POST
    public function umkmStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nib' => 'required',
            'phonenumber' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $validatedData['slug'] = Str::snake($request->name);
        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/' . Auth::user()->username . '/umkm');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Umkm::create($validatedData);

        return redirect('/dashboard')->with('success', 'New UMKM has been added!');
    }

    // Koperasi GET
    public function koperasi()
    {
        return view('dashboard.pages.register.koperasi', [
            'categories' => CategoryKoperasi::all()
        ]);
    }

    // koperasiStore POST
    public function koperasiStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'phonenumber' => 'required',
            'city' => 'required',
            'address' => 'required',
            'category_koperasi_id' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $validatedData['slug'] = Str::snake($request->name);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/' . Auth::user()->username . '/koperasi');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Koperasi::create($validatedData);

        return redirect('/dashboard')->with('success', 'New Koperasi has been added!');
    }
}
