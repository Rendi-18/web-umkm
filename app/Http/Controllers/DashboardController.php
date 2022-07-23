<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Koperasi;
use App\Models\Pesan;
use App\Models\User;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;
        $umkm = Umkm::where('user_id', $id);

        if (request('searchUmkm')) {
            $umkm->where('name', 'like', '%' . request('searchUmkm') . '%')->get();
        }

        $koperasi = Koperasi::where('user_id', $id);

        if (request('searchKoperasi')) {
            $koperasi->where('name', 'like', '%' . request('searchKoperasi') . '%')->get();
        }

        return view(
            'dashboard.pages.index',
            [
                // 'title' => '',
                'umkms' => Umkm::latest()->paginate(8, ['*'], 'umkms'),
                'koperasis' => Koperasi::latest()->paginate(8, ['*'], 'koperasis'),
                'users' => User::latest()->get(),
                'pesans' => Pesan::latest()->get(),


                'umkmUser' => $umkm->get(),
                'koperasiUser' => $koperasi->get()
            ]
        );
    }

    public function comp()
    {
        return view(
            'dashboard.pages.test',
            [
                'umkms' => Umkm::latest()->get()
            ]
        );
    }


    // Setting Profile
    public function edit()
    {
        return view(
            'dashboard.pages.profile.edit',
            [
                'user' => Auth::user(),
                'title' => ''
            ]
        );
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        // $file_name = $request->image->getClientOriginalName();

        $rules = [
            'name' => 'required',
            'username' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);
        $validatedData['id'] = auth()->user()->id;

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/' . $user->username . '/profile');
        }

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('success', 'Profile has been Updated');
    }

    // Delete DELETE
    public function destroy()
    {
        $user = Auth::user();
        if ($user->image) {
            Storage::delete($user->image);
        }

        User::destroy($user->id);
        return redirect('/')->with('success', 'User telah dihapus');
    }
}
