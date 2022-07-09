<?php

namespace App\Http\Controllers\User\Izin;

use App\Http\Controllers\Controller;
use App\Models\CategoryIzin;
use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserIzinController extends Controller
{
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
}
