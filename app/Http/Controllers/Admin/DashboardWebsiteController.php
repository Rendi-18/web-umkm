<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardWebsiteController extends Controller
{
    // Edit GET
    public function edit()
    {
        return view('dashboard.pages.website.index', [
            'website' => Website::latest()->get()
        ]);
    }

    // Update PUT
    public function update(Request $request, Website $website)
    {

        $rules = [
            'sitename' => 'required',
            'longsitename' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'address' => 'required',
            'title' => 'required',
            'map' => 'required',
            'iframe' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);
        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('logo');
        }

        Website::where('id', $website->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('success', 'Website has been Updated');
    }
}
