<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Http\Request;

class DashboardUserUmkmController extends Controller
{
    public function index(Umkm $umkm)
    {
        return view(
            'dashboard.pages.umkm-profile.index',
            [
                'umkm' => $umkm
            ]
        );
    }

    public function edit(Umkm $umkm)
    {
        return view(
            'dashboard.pages.umkm-profile.edit',
            [
                'umkm' => $umkm
            ]
        );
    }

    // Edit PUT
    public function update(Request $request, Umkm $umkm)
    {
        $rules = [
            'name' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'description' => 'required',
        ];

        $validatedData['user_id'] = auth()->user()->id;

        $validatedData = $request->validate($rules);


        Umkm::where('id', $umkm->id)
            ->update($validatedData);

        return redirect('/dashboard/umkm/' . $umkm->id . '/umkm-profile')->with('success', 'Profile has been Updated');
    }
}
