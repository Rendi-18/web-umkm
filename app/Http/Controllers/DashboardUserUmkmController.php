<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUserUmkmController extends Controller
{
    public function index(Umkm $umkm)
    {
        $this->authorize(ability: 'view', arguments: $umkm);
        return view(
            'dashboard.pages.umkm-profile.index',
            [
                'umkm' => $umkm,
                'title' => 'profile'
            ]
        );
    }

    public function edit(Umkm $umkm)
    {
        $this->authorize(ability: 'view', arguments: $umkm);
        return view(
            'dashboard.pages.umkm-profile.edit',
            [
                'umkm' => $umkm,
                'title' => 'profile'
            ]
        );
    }

    // Edit PUT
    public function update(Request $request, Umkm $umkm)
    {
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
            $validatedData['image'] = $request->file('image')->storeAs('img/' . $umkm->user->username . '/umkm', $file_name);
        }


        Umkm::where('id', $umkm->id)
            ->update($validatedData);

        return redirect('/dashboard/umkm/' . $umkm->id . '/umkm-profile')->with('success', 'Profile has been Updated');
    }
}
