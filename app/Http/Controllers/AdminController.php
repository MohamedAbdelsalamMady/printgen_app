<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Contact;
use App\Models\Order;
use App\Models\AIOrder;

class AdminController extends Controller
{

    public function view_category()
    {
        $data = category::all();
        return view('admin.category', compact('data'));
    }


    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category_name;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }


    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_product()
    {
        $category = category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->alt_image = $request->alt_image;
        $product->category = $request->category;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;


        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product()
    {
        $product = product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function update_product($id)
    {
        $product = product::find($id);
        $category = category::all();
        return view('admin.update_product', compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product = product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->alt_image = $request->alt_image;
        $product->category = $request->category;

        $image = $request->image;
        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image=$imagename;
        }

        $product->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }

    public function add_new_employee()
    {
        $department = department::all();
        return view('admin.employee', compact('department'));
    }

    public function add_employee(Request $request)
    {
        $employee = new employee;

        $employee->employee_name= $request->employee_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->years_of_exp = $request->years_of_exp;
        $employee->department = $request->department;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('employee', $imagename);
        $employee->image = $imagename;

        $employee->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_employee()
    {
        $employee = employee::all();
        return view('admin.show_employee', compact('employee'));
    }

    public function delete_employee($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->back()->with('message', 'Employee Deleted Successfully');
    }

    public function update_employee($id)
    {
        $employee = employee::find($id);
        $department = department::all();
        return view('admin.update_employee', compact('employee', 'department'));
    }

    public function update_employee_confirm(Request $request, $id)
    {
        $employee = employee::find($id);
        $employee->employee_name= $request->employee_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->years_of_exp = $request->years_of_exp;
        $employee->department = $request->department;

        $image = $request->image;
        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('employee',$imagename);
            $employee->image=$imagename;
        }

        $employee->save();
        return redirect()->back()->with('message', 'Employee Updated Successfully');
    }
    //End of Employee Section

    //Start of Department Section

    public function view_department()
    {
        $data=department::all();
        return view('admin.view_department',compact('data'));
    }

    public function add_department(Request $request)
    {
        $data = new department;
        $data->department_name = $request->department_name;
        $data->save();
        return redirect()->back()->with('message', 'Department Added Successfully');
    }

    public function delete_department($id)
    {
        $data=department::find($id);
        $data->delete();
        return redirect()->back()->with('message' ,'Department Deleted Successfully');
    }


    public function showOrders()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

    public function showAIOrders()
    {
        $aiOrders = AIOrder::all();
        return view('admin.ai_orders', compact('aiOrders'));
    }

    public function editOrder($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders_edit', compact('order'));
    }

    public function editAIOrder($id)
    {
        $aiOrder = AIOrder::findOrFail($id);
        return view('admin.ai_orders_edit', compact('aiOrder'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = $request->input('order_status');
        $order->save();

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully');
    }

    public function updateAIOrder(Request $request, $id)
    {
        $aiOrder = AIOrder::findOrFail($id);
        $aiOrder->order_status = $request->input('order_status');
        $aiOrder->save();

        return redirect()->route('admin.ai_orders.index')->with('success', 'AI Order updated successfully');
    }

    public function destroyOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully');
    }

    public function destroyAIOrder($id)
    {
        $aiOrder = AIOrder::findOrFail($id);
        $aiOrder->delete();

        return redirect()->route('admin.ai_orders.index')->with('success', 'AI Order deleted successfully');
    }




    public function all_messages()
    {
        $data = Contact::all();
        return view('admin.all_messages',compact('data'));
    }

}
