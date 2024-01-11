<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
        // GET /api/categories
        public function getCategories()
        {
            $categories = Category::all();
            return response()->json($categories);
        }
    
        // POST /api/categories
        public function createCategory(Request $request)
        {
            $category = Category::create([
                'name' => $request->input('name')
                // Add other fields as needed
            ]);
    
            return response()->json($category, 201);
        }
    
        // GET /api/categories/{categoryId}
        public function getCategory($categoryId)
        {
            $category = Category::find($categoryId);
    
            if (!$category) {
                return response()->json(['message' => 'Category not found'], 404);
            }
    
            return response()->json($category);
        }
    
        // PATCH /api/categories/{categoryId}
        public function updateCategory(Request $request, $categoryId)
        {
            $category = Category::find($categoryId);
    
            if (!$category) {
                return response()->json(['message' => 'Category not found'], 404);
            }
    
            $category->update([
                'name' => $request->input('name')
                // Update other fields as needed
            ]);
    
            return response()->json($category);
        }
    
        // DELETE /api/categories/{categoryId}
        public function deleteCategory($categoryId)
        {
            $category = Category::find($categoryId);
    
            if (!$category) {
                return response()->json(['message' => 'Category not found'], 404);
            }
    
            $category->delete();
    
            return response()->json(['message' => 'Category deleted']);
        }
}
