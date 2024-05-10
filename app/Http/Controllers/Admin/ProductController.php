<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        $category = Categories::get();
        $brand = Brand::get();

        return Inertia::render(
            "Admin/Products/Index",
            [
                'products' => $products,
                'category' => $category,
                'brand' => $brand
            ]
        );
    }

    public function store(Request $request)
    {

        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        if ($request->hasFile('product_images')) {
            $productsImages = $request->file('product_images');
            foreach ($productsImages as $image) {
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOrginalExtention();
                $image->move('product_images', $uniqueName);

                ProductImages::create([
                    'product_id' => $product->id,
                    'image' => 'product_image/' . $uniqueName
                ]);
            }
        }
    }
}
