<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\HairType;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $hairTypes = HairType::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('catalog.index', compact('categories', 'hairTypes', 'brands', 'products'));
    }
}
