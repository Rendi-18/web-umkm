<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Http\Request;

class DashboardUserUmkmController extends Controller
{
    public function umkmProfile(Umkm $umkm)
    {
        return view(
            'dashboard.pages.umkm-profile',
            [
                'umkms' => $umkm
            ]
        );
    }

    public function index(Umkm $umkm)
    {
        return view(
            'dashboard.pages.umkm-product.index',
            [
                'products' => $umkm->product
            ]
        );
    }

    public function create(Umkm $umkm)
    {
        return view(
            'dashboard.pages.umkm-product.create',
            [
                'umkm' => $umkm
            ]
        );
    }

    public function store(Request $request, Umkm $umkm)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'price' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'umkm_id' => 'required',
        ]);



        $validatedData['user_id'] = auth()->user()->id;

        Product::create($validatedData);

        return redirect('/dashboard/umkm/' . $umkm->id . '/umkm-product')->with('success', 'New Product has been added!');
    }

    public function edit(Product $product)
    {
        return view('dashboard.pages.umkm-product.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }


        $validatedData['user_id'] = auth()->user()->id;

        $validatedData = $request->validate($rules);


        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/dashboard/umkm/' . $product->umkm->id . '/umkm-product')->with('success', 'Poduct has been Updated');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/dashboard/umkm/' . $product->umkm->id . '/umkm-product')->with('success', 'Product telah dihapus');
    }
}
