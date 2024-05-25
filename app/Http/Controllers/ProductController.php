<?php

namespace App\Http\Controllers;

use App\Models\brand;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('products/index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('products.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_brand = $request->id_brand;

        // update img
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->cover = $name;
        }
        $product->save();
        return redirect()->route('product.index')->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brand = Brand::all();
        return view('products.edit', compact('product', 'brand'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_brand = $request->id_brand;

        // delete img
        if ($request->hasFile('cover')) {
            $product->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->cover = $name;
        }

        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route(('product.index'))
            ->with('success', 'data berhasil di hapus');
    }
}
