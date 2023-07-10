<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    public function show()
    {
        $products = Product::where('featured', 1)->get();
        $categories = Category::all();
        return view('home', compact('products'));
    }

}
