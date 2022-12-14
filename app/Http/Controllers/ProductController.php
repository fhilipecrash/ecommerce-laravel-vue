<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'description' => ['required'],
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);

        return Redirect::route('dashboard');
    }

    public function index()
    {
        $products = Product::all();

        return Inertia::render('Dashboard', ['products' => $products]);
    }
}
