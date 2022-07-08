<?php

namespace App\Http\Controllers\User\Koperasi;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use App\Models\ProductKoperasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductKoperasiController extends Controller
{
    // GET
    public function index(Koperasi $koperasi)
    {
        return view('dashboard.pages.koperasi-product.index', [
            'products' => $koperasi->product,
        ]);
    }

    // Create GET
    public function create(Koperasi $koperasi)
    {
        $this->authorize(ability: 'view', arguments: $koperasi);
        return view(
            'dashboard.pages.koperasi-product.create',
            [
                'koperasi' => $koperasi,
            ]
        );
    }

    // Create PUT
    public function store(Request $request, Koperasi $koperasi)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:product_koperasis',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'koperasi_id' => 'required',
        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/' . $koperasi->user->username . '/product_koperasi');
        }

        $validatedData['koperasi_id'] = $koperasi->id;
        ProductKoperasi::create($validatedData);

        return redirect('/dashboard/koperasi/' . $koperasi->id . '/koperasi-product')->with('success', 'New Product has been added!');
    }

    // Edit GET
    public function edit(ProductKoperasi $productKoperasi)
    {
        $this->authorize(ability: 'view', arguments: $productKoperasi);
        return view('dashboard.pages.koperasi-product.edit', [
            'product' => $productKoperasi,
        ]);
    }

    // Edit PUT
    public function update(Request $request, ProductKoperasi $productKoperasi)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $productKoperasi->slug) {
            $rules['slug'] = 'required|unique:product_koperasis';
        }

        $validatedData = $request->validate($rules);
        $validatedData['koperasi_id'] = $productKoperasi->koperasi->id;

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/' . $productKoperasi->koperasi->user->username . '/product_koperasi');
        }


        ProductKoperasi::where('id', $productKoperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/koperasi/' . $productKoperasi->koperasi->id . '/koperasi-product')->with('success', 'Poduct has been Updated');
    }

    // Unggulan PUT
    public function isUnggulan(Request $request, ProductKoperasi $productKoperasi)
    {
        $rules = [
            'isUnggulan' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['koperasi_id'] = $productKoperasi->koperasi->id;

        ProductKoperasi::where('id', $productKoperasi->id)
            ->update($validatedData);

        return redirect('/dashboard/koperasi/' . $productKoperasi->koperasi->id . '/koperasi-product')->with('successUnggulan', 'Poduct has been edit');
    }

    // Delete DELETE
    public function destroy(ProductKoperasi $productKoperasi)
    {
        if ($productKoperasi->image) {
            Storage::delete($productKoperasi->image);
        }
        ProductKoperasi::destroy($productKoperasi->id);
        return redirect('/dashboard/koperasi/' . $productKoperasi->koperasi->id . '/koperasi-product')->with('success', 'Product telah dihapus');
    }
}
