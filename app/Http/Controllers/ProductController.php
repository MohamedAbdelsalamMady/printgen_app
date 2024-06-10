<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Get distinct categories for the filter dropdown
        $categories = Product::select('category')->distinct()->get();

        // Initialize the query
        $query = Product::query();

        // Apply category filter if selected
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Apply price range filter if provided
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        // Get the filtered products with pagination
        $products = $query->paginate(8)->appends($request->all());

        // Pass categories and products to the view
        return view('home.product', compact('products', 'categories'));
    }

    public function product_details($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        return view('home.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::check()) {
            $request->validate([
                'quantity' => 'required|integer|min:1',
                'color' => 'required|string',
                'size' => 'required|string',
            ]);

            $user = Auth::user();
            $product = Product::find($id);

            if (!$product) {
                return redirect()->back()->with('error', 'Product not found');
            }

            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_title = $product->title;

            $cart->price = ($product->discount_price != 0)
                ? $product->discount_price * $request->quantity
                : $product->price * $request->quantity;

            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->color = $request->color;
            $cart->size = $request->size;

            $cart->save();

            return redirect()->back()->with('success', 'Product added to cart');
        } else {
            return redirect('login')->with('error', 'Please log in to add products to your cart');
        }
    }



}
