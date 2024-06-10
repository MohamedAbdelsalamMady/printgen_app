<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;
use App\Models\Order;
use App\Models\AIOrder;

class SupplierController extends Controller
{
    public function showOrders()
    {
        $orders = Order::all();
        return view('supplier.orders', compact('orders'));
    }

    public function editOrder($id)
{
    $order = Order::find($id);
    return view('supplier.orders_edit', compact('order'));
}

public function updateOrder(Request $request, $id)
{
    $order = Order::find($id);

    if ($order) {
        $order->order_status = $request->input('order_status');
        $order->save();

        return redirect()->route('supplier.orders.index')->with('success', 'Order updated successfully');
    } else {
        return redirect()->route('supplier.orders.index')->with('error', 'Order not found');
    }
}

public function destroyOrder($id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->delete();
            return redirect()->route('supplier.orders.index')->with('success', 'Order deleted successfully');
        } else {
            return redirect()->route('supplier.orders.index')->with('error', 'Order not found');
        }
    }

    public function showAIOrders()
{
    $aiOrders = AIOrder::all();
    return view('supplier.supplier_ai_orders', compact('aiOrders'));
}

public function editAIOrder($id)
{
    $aiOrder = AIOrder::find($id);
    return view('supplier.supplier_ai_orders_edit', compact('aiOrder'));
}

public function updateAIOrder(Request $request, $id)
{
    $aiOrder = AIOrder::find($id);

    if ($aiOrder) {
        $aiOrder->order_status = $request->input('order_status');
        $aiOrder->save();

        return redirect()->route('supplier.ai_orders.index')->with('success', 'AI Order updated successfully');
    } else {
        return redirect()->route('supplier.ai_orders.index')->with('error', 'AI Order not found');
    }
}

public function destroyAIOrder($id)
{
    $aiOrder = AIOrder::find($id);

    if ($aiOrder) {
        $aiOrder->delete();
        return redirect()->route('supplier.ai_orders.index')->with('success', 'AI Order deleted successfully');
    } else {
        return redirect()->route('supplier.ai_orders.index')->with('error', 'AI Order not found');
    }
}
}


