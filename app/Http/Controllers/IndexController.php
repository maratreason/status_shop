<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return void
     */
    public function index($categoryAlias = null)
    {
        $services = Service::all()->take(8);
        $offers = Offer::all()->take(6);
        $teams = Team::all()->take(4);
        $categories = Category::all();
        $products = Product::all();

        $curCategory = Category::where('alias', $categoryAlias)->first();

        if (isset($curCategory)) {
            session()->put('category_alias', $categoryAlias);
            $products = Product::where('category_id', $curCategory->id)->get();
            return view('index', compact('services', 'offers', 'teams', 'categories', 'products'));
        }

        return view('index', compact('services', 'offers', 'teams', 'categories', 'products',));
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
