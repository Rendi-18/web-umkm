<?php

namespace App\Http\Controllers\User\Bantuan;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use App\Models\Umkm;
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

    public function edit(Bantuan $bantuan)
    {
        return view(
            'dashboard.pages.bantuan.edit',
            [
                'bantuan' => $bantuan,
                'umkms' => Umkm::all()
            ]
        );
    }

    // Edit PUT
    public function update(Request $request, Bantuan $bantuan)
    {
        $rules = [
            'phonenumber' => 'required',
            'umkm_id' => 'required',
            'bantuan' => 'required',
            'description' => 'required',
            'file' => 'file|max:2000',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['umkm_id'] = $bantuan->umkm->id;
        $validatedData['user_id'] = $bantuan->user->id;

        // Image
        if ($request->file('file')) {
            if ($request->oldDoc) {
                Storage::delete($request->oldDoc);
            }
            $validatedData['file'] = $request->file('file')->store('doc/' . Auth::user()->username);
        }


        Bantuan::where('id', $bantuan->id)
            ->update($validatedData);

        return redirect('/dashboard/bantuan')->with('success', 'Bantuan has been updated!');
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
