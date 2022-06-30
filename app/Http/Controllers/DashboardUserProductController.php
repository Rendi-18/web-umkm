<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUserProductController extends Controller
{
    // Read GET
    public function index(Umkm $umkm)
    {
        $this->authorize(ability: 'view', arguments: $umkm);
        return view(
            'dashboard.pages.umkm-product.index',
            [
                'products' => $umkm->product,
                'title' => 'product'
            ]
        );
    }

    // Create GET
    public function create(Umkm $umkm)
    {
        $this->authorize(ability: 'view', arguments: $umkm);
        return view(
            'dashboard.pages.umkm-product.create',
            [
                'umkm' => $umkm,
                'title' => 'product'
            ]
        );
    }

    // Create PUT
    public function store(Request $request, Umkm $umkm)
    {
        // Image Name
        $file_name = $request->image->getClientOriginalName();

        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'umkm_id' => 'required',
        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->storeAs('product-image', $file_name);
        }



        $validatedData['user_id'] = auth()->user()->id;

        Product::create($validatedData);

        return redirect('/dashboard/umkm/' . $umkm->id . '/umkm-product')->with('success', 'New Product has been added!');
    }

    // Edit GET
    public function edit(Product $product)
    {
        $this->authorize(ability: 'view', arguments: $product);
        return view('dashboard.pages.umkm-product.edit', [
            'product' => $product,
            'title' => 'product'
        ]);
    }

    // Edit PUT
    public function update(Request $request, Product $product)
    {
        $file_name = $request->image->getClientOriginalName();

        $rules = [
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }


        $validatedData['user_id'] = auth()->user()->id;


        $validatedData = $request->validate($rules);

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->storeAs('img/' . $product->umkm->user->username . '/product', $file_name);
        }


        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/dashboard/umkm/' . $product->umkm->id . '/umkm-product')->with('success', 'Poduct has been Updated');
    }

    // Unggulan PUT
    public function isUnggulan(Request $request, Product $product)
    {
        $rules = [
            'isUnggulan' => 'required',
        ];

        $validatedData['user_id'] = auth()->user()->id;

        $validatedData = $request->validate($rules);

        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/dashboard/umkm/' . $product->umkm->id . '/umkm-product')->with('successUnggulan', 'Poduct has been edit');
    }

    // Delete DELETE
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);
        return redirect('/dashboard/umkm/' . $product->umkm->id . '/umkm-product')->with('success', 'Product telah dihapus');
    }
}
