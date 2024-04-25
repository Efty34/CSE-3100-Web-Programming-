<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsPage()
    {
        return view('products.', [
            // 'players' => Players::oldest()->paginate(1)
            'products' => Products::all()
        ]);
    }
    public function createProduct()
    {
        return view('products.create-product');
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required|mimes:png,jpg,jpeg|max:10000',
            'product_id' => 'required',
            'product_price' => 'required'
        ]);

        $productImg = time() . '_product.' . $request->product_image->extension();
        $request->product_image->move(public_path('products_storage'), $productImg);

        $products = new Products();
        $products->product_name = $request->product_name;
        $products->product_image = $productImg;
        $products->product_id = $request->product_id;
        $products->product_price = $request->product_price;

        $products->save();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product added successfully');
    }

    public function updateProduct($id)
    {
        $product = Products::where('id', $id)->first();
        return view('products.update-product', ['product' => $product]);
    }

    public function saveUpdateProduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'nullable|mimes:png,jpg,jpeg|max:10000',
            'product_id' => 'required',
            'product_price' => 'required'
        ]);

        $product = Products::where('id', $id)->first();

        if ($request->hasFile('product_image')) {
            $productImg = time() . '_Newproduct.' . $request->product_image->extension();
            $request->product_image->move(public_path('products_storage'), $productImg);
            $product->product_image = $productImg;

        }

        $product->product_name = $request->product_name;
        $product->product_id = $request->product_id;
        $product->product_price = $request->product_price;

        $product->save();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        $product = Products::where('id', $id)->first();
        $product->delete();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product deleted successfully');
    }
}
