<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // GET /api/products
    public function getProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // POST /api/products
    public function createProduct(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'pricing' => $request->input('pricing'),
            'category_id' => $request->input('category_id')
            // Add other fields as needed
        ]);

        return response()->json($product, 201);
    }

    // GET /api/products/{productId}
    public function getProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    // PATCH /api/products/{productId}
    public function updateProduct(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id')
            // Update other fields as needed
        ]);

        return response()->json($product);
    }

    // DELETE /api/products/{productId}
    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted']);
    }
}
