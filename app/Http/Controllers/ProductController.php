<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAddProductForm()
    {
        return view('products.productAdd');
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'Product_name' => ['required', 'string', 'max:50', 'unique:products'],
            'price' => ['required', 'numeric'],
            'description' => 'nullable|string|max:200',
        ]);

        Product::create([
            'Product_name' => $request->Product_name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('products.product_list')->with('success', 'Add successful!');
    }

    public function product_list()
    {
        $products = Product::all();
        return view('products.product_list', compact('products'));
    }

    public function product_details($id)
    {
        $product = Product::findOrFail($id);
        return view('products.product_details', compact('product'));
    }     
}
