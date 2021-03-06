<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:300']
        ]);

        $image = '';
        if($request->file('productImage') != null){
            $image = $this->get_and_save_image($request->file('productImage'));
        }

        Product::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $image
        ]);

        return redirect('/product');
    }

    public function get_and_save_image($productcover)
    {
        $extension = $productcover->getClientOriginalExtension();
        Storage::disk('public')->put(
            $productcover->getFilename() . '.' . $extension,
            File::get($productcover)
        );
        return $productcover->image = $productcover->getfilename() . '.' . $extension;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:300']
        ]);

        if ($request->file('productImage') != null) {
            $product->image = $this->get_and_save_image($request->file('productImage'));
        }

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product-> delete();
        return redirect()->route('product.index');
    }
}
