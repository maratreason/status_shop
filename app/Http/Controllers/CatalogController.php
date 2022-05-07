<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\HairType;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($category = null)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $hairTypes = HairType::all();
        $products = Product::all();

        return view('catalog.index', compact('categories', 'hairTypes', 'brands', 'products'));
    }

    public function show($category, $product)
    {
        $product = Product::where('alias', $product)->first();
        return view('catalog.show', compact('product'));
    }
}
