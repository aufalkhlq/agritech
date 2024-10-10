<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function addproduct()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/products'), $imageName);

            return response()->json(['success' => $imageName]);
        }

        return response()->json(['error' => 'No file uploaded.'], 400);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'weight' => 'required|string',
            'product_code' => 'required|string|unique:products,product_code',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'uploaded_images' => 'required|string', // Ensure this is validated as a string
        ]);

        $validatedData['in_stock'] = $request->has('in_stock');
        $validatedData['images'] = json_encode(json_decode($request->input('uploaded_images')), true); // Convert to JSON string

        try {
            Product::create($validatedData);
            return response()->json(['success' => 'Product successfully created.']);
        } catch (\Exception $e) {
            \Log::error('Product creation failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create product. ' . $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
