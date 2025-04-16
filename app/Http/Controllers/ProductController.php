<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
         $products = Product::orderBy('id', 'ASC')->get();
        Product::all();
        // dd($products);

        return view('products', compact('products'));
    }

    public function create() {

        return view('product-add');
    }

    public function store(Request $request) {
        $products = new Product();
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->save();

        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    public function edit($id) {
        $product = Product::find($id);

        return view('product-edit', compact('product'));
    }
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        // xóa vĩnh viễn
        // $product->forceDelete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }

    // khôi phục lại khóa meemf
    public function restoreProduct($id) {
        // $product = Product::withTrashed($id);
        $product = Product::withTrashed()->find($id);
        $product->restore();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }

}

