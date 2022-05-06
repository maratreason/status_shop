<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $services = Service::all()->take(8);
        $offers = Offer::all()->take(6);
        $teams = Team::all()->take(4);
        $categories = Category::all();
        $products = Product::all();
        return view('index', compact('services', 'offers', 'teams', 'categories', 'products'));
    }

    /**
     * @param string $category
     * @return void
     */
    public function category($category = "")
    {
        $products = null;
        return view('index', compact('products'));
    }
}
