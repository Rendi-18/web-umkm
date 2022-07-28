<?php

namespace App\Http\Controllers\User\Bantuan;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardBantuanController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.bantuan.index',
            [
                'bantuans' => Bantuan::all()
            ]
        );
    }

    // store POST
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phonenumber' => 'required',
            'umkm_id' => 'required',
            'bantuan' => 'required',
            'description' => 'required',
            'file' => 'file|max:2000',
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('doc/' . Auth::user()->username);
        }

        $validatedData['user_id'] = auth()->user()->id;
        Bantuan::create($validatedData);

        return redirect('/dashboard/bantuan')->with('success', 'New Bantuan has been added!');
    }

    // Delete DELETE
    public function destroy(Bantuan $bantuan)
    {
        if ($bantuan->file) {
            Storage::delete($bantuan->file);
        }
        Bantuan::destroy($bantuan->id);
        return redirect('/dashboard/bantuan')->with('success', 'Bantuan telah dibatalkan');
    }
}
