<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Contact;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('home.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else if ($usertype == 'supplier') {
                return view('supplier.index');
            } elseif ($usertype == 'service') {
                return view('Chatify');
            } else {
                return redirect()->back();
            }
        }
    }

public function about()
{
    return view('home.about');
}
public function service()
{
    return view('home.service');
}
public function team()
{
    return view('home.team');
}
public function privacyPolicy()
{
    return view('home.privacy-policy');
}
public function pricing()
{
    return view('home.pricing');
}
public function contact()
{
    return view('home.contact');
}
public function QandA()
{
    return view('home.Q&A');
}


    public function show_cart()
    {

        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
            return view('home.showcart', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }


    public function show_order()
    {

        if (Auth::id()) {
            $id = Auth::user()->id;
            $order = order::where('user_id', '=', $id)->get();
            $product = product::find($id);

            $user = user::find($id);
            return view('home.checkout', compact('order', 'user', 'product'));
        } else {
            return redirect('login');
        }
    }

    public function showCheckout()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cart = cart::where('user_id', $user->id)->get();

            $totalPrice = $cart->sum(function($item) {
                return $item->price * $item->quantity;
            });

            return view('home.checkout', compact('cart', 'totalPrice'));
        } else {
            return redirect('login');
        }
    }


    public function add_order(Request $request)
{
    if (Auth::check()) {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty. Please add items to your cart before placing an order.');
        }

        $orders = [];
        $totalOrderPrice = 0; // Initialize the total order price
        foreach ($cartItems as $cart) {
            $product = Product::find($cart->product_id);

            if (!$product) {
                continue;
            }

            $orderTotal = $this->calculateOrderTotal($cart, $request->delivery_status);
            $deliveryDate = $this->calculateDeliveryDate($request->delivery_status);

            $order = new Order();
            $order->name = $request->input('name');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->street_name = $request->input('street_name');
            $order->building_name_no = $request->input('building_name_no');
            $order->address = $request->input('address');
            $order->user_id = $user->id;
            $order->product_title = $product->title;
            $order->quantity = $cart->quantity;
            $order->size = $cart->size;
            $order->color = $cart->color;
            $order->product_id = $product->id;
            $order->image = $product->image;
            $order->payment_status = $request->input('payment_status');

            if ($request->input('payment_status') === 'pay_online') {
                $order->name_on_card = $request->input('name_on_card');
                $order->credit_card_number = $request->input('credit_card_number');
                $order->expiration_date = $request->input('expiration_date');
                $order->cvv = $request->input('cvv');
            }

            $order->delivery_status = $request->input('delivery_status');
            $order->delivery_date = $deliveryDate;
            $order->order_status = 'pending'; // Set the default order status to "pending"

            if ($product->discount_price != 0) {
                $order->price = $product->discount_price * $cart->quantity;
            } else {
                $order->price = $product->price * $cart->quantity;
            }

            $order->total_price = $orderTotal;
            $order->save();
            $totalOrderPrice += $orderTotal; // Add to total order price
            $orders[] = $order;
        }

        // Clear the user's cart after creating the orders
        Cart::where('user_id', $user->id)->delete();

        // Generate the PDF
        $pdf = PDF::loadView('receipt', ['orders' => $orders]);

        // Return the PDF as a download
        $pdf->download('order_receipt.pdf');

        // Flash message for successful order
        session()->flash('success', 'Your order has been successfully placed on.'.$deliveryDate);

        // Redirect to home page with total order price
        return redirect('/')->with('total_order_price', $totalOrderPrice);
    } else {
        return redirect('login')->with('error', 'Please login to place an order.');
    }
}

// Private function to calculate order total
private function calculateOrderTotal($cart, $deliveryStatus)
{
    $product = Product::find($cart->product_id);
    $totalPrice = $product->discount_price != 0 ? $product->discount_price * $cart->quantity : $product->price * $cart->quantity;

    if ($deliveryStatus === 'today') {
        $totalPrice += 35;
    }

    return $totalPrice;
}

// Private function to calculate delivery date
private function calculateDeliveryDate($deliveryStatus)
{
    if ($deliveryStatus === 'today') {
        return Carbon::now()->addDays(3)->format('Y-m-d');
    }

    return Carbon::now()->addDays(3)->format('Y-m-d');
}

public function sendmessage(Request $request)
    {
       /*  $request->validate([
            'name'=>'required|max:100'
        ]); */

        $contact = new Contact;
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Message Sent Successfully');

    }
}


