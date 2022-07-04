<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUserKoperasiController extends Controller
{
    // GET
    public function index(Koperasi $koperasi)
    {
        return view('dashboard.pages.koperasi-profile.index', [
            'koperasi' => $koperasi,
            // 'title' => 'profile'
        ]);
    }

    public function edit(Koperasi $koperasi)
    {
        // $this->authorize(ability: 'view', arguments: $koperasi);
        return view(
            'dashboard.pages.koperasi-profile.edit',
            [
                'koperasi' => $koperasi,
                // 'title' => 'profile'
            ]
        );
    }

    // Edit PUT
    public function update(Request $request, Koperasi $koperasi)
    {
        $request->image;
        $file_name = $request->image->getClientOriginalName();

        $rules = [
            'name' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:800',
        ];


        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->storeAs('img/' . $koperasi->user->username . '/koperasi', $file_name);
        }


        Koperasi::where('id', $koperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/koperasi/' . $koperasi->id . '/koperasi-profile')->with('success', 'Profile has been Updated');
    }
}
