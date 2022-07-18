<?php

namespace App\Http\Controllers\User\Umkm;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUserProductController extends Controller
{
    // Read GET
    public function index(Umkm $umkm)
    {
        $id = $umkm->id;
        $products = Product::where('umkm_id', $id);

        if (request('search')) {
            $products->where('name', 'like', '%' . request('search') . '%')->get();
        }

        $this->authorize(ability: 'view', arguments: $umkm);
        return view(
            'dashboard.pages.umkm-product.index',
            [
                'products' => $products->get(),
                'umkm' => $umkm
                // 'title' => 'product'
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
                // 'title' => 'product'
            ]
        );
    }

    // Create PUT
    public function store(Request $request, Umkm $umkm)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',

        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/' . $umkm->user->username . '/product');
        }

        $validatedData['slug'] = Str::snake($request->name);
        $validatedData['umkm_id'] = $umkm->id;
        Product::create($validatedData);

        return redirect('/dashboard/umkm/' . $umkm->id . '/umkm-product')->with('success', 'New Product has been added!');
    }

    // Edit GET
    public function edit(Product $product)
    {
        $this->authorize(ability: 'view', arguments: $product);
        return view('dashboard.pages.umkm-product.edit', [
            'product' => $product,
            // 'title' => 'product'
        ]);
    }

    // Edit PUT
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        if ($request->name != $product->name) {
            $validatedData['slug'] = Str::snake($request->name);
        }
        $validatedData['umkm_id'] = $product->umkm->id;

        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/' . $product->umkm->user->username . '/product');
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

        $validatedData = $request->validate($rules);
        $validatedData['umkm_id'] = $product->umkm->id;

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
