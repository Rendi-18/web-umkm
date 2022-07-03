<?php

namespace App\Http\Controllers\User\Izin;

use App\Http\Controllers\Controller;
use App\Models\CategoryIzin;
use App\Models\Izin;
use Illuminate\Http\Request;

class DashboardUserIzinController extends Controller
{
    public function surat()
    {
        return view('dashboard.pages.izin.index', [
            // 'title' => '',
            'categories' => CategoryIzin::all()
        ]);
    }

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

        return redirect('/dashboard')->with('success', 'New Surat has been added!');
    }

    // Delete DELETE
    public function suratDestroy(Izin $izin)
    {
        Izin::destroy($izin->id);
        return redirect('/dashboard')->with('success', 'Surat telah dihapus');
    }
}
