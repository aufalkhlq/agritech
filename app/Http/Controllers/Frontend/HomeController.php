<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch products from the database
        $products = Product::all();

        // Pass the products data to the view
        return view('frontend.home', compact('products'));
    }
    public function viewProduct($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'id' => $product->id,
            'title' => $product->title,
            'category' => $product->category,
            'price' => $product->price,
            'original_price' => $product->original_price, // Pastikan original_price tidak dikomentari
            'images' => json_decode($product->images), // Pastikan ini mengembalikan array
            'code' => $product->product_code,
            'in_stock' => $product->in_stock,
            'type' => $product->category,
            'reviews_count' => $product->reviews_count,
        ]);
    }

}
