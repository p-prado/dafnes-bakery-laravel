<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return $products;
        return view('products.index');
    }

    public function dashboardIndex()
    {
        $products = Product::all();
        return view('dashboard.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request;

        // Validate the input data
        // $this->validate($request, [
        //     'sku' => 'required|string|max:15',
        //     'name' => 'required|string|max:45',
        //     'price' => 'required|numeric|min:0',
        //     'description' => 'required|string',
        //     'image' => 'nullable|image|max:2048'
        // ]);

        // Create a new product instance
        $product = new Product();

        // Fill the product attributes with the request data
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->idcategory = $request->category;
        $product->servings = $request->servings;
        $product->servings_unit = $request->servings_unit;
        $product->price = $request->price;
        $product->featured = $request->featured;


        // If there is an image file in the request, upload it and store its path
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $image_path = 'uploads/products/' . $image_name;
        //     $image->move(public_path('uploads/products'), $image_name);
        //     $product->image = $image_path;
        // }

        // Save the product to the database
        $product->save();

        // Return a success response with the product data
        return redirect('/dashboard/productos');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        // return $product;
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
