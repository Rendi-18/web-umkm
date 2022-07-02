<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\User;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.index',
            [
                'title' => ''
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
