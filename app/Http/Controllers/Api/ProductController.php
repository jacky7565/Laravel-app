<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

use illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Product::all();

        // return  $all;
        if ($all->isEmpty()) {
            return response()->json(['message' => 'No Products found'], 404);
        } else {
            return response()->json(['message' => 'All Products', 'data' => $all], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request;
        try {
            $val = $request->validate([
                'name' => 'required|string|max:50',
                'discription' => 'nullable|string',
                'price' => 'required|numeric|min:0'
            ]);
            Product::create($val);

            return response()->json(['message' => 'Product created successfully', 'data' => $val], 201);
        } catch (validationException $e) {
            return response()->json(['error' => $e], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json(['message' => 'Product found', 'data' => $product], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = Product::find((int) $id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        try {
            $valid = $request->validate([
                'name' => 'sometimes|string|max:50',
                'discription' => 'nullable|string',
                'price' => 'sometimes|numeric|min:0'
            ]);
            $product->update($valid);

            return response()->json(['message' => 'Product updated successfully', 'data' => $product], 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'Invalid input', 'details' => $e->errors()], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Invilad id data not found'], 404);
        }
        $res = $product->delete();
        if ($res) {
            return response()->json(['message' => 'Product deleted successfully'], 200);
        }
    }
}
