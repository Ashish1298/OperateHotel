<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Order;
use App\Models\Room;
use App\Models\food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('admin.Dashboard.order.index', compact('orders'));
    }


    public function createOrder()
    {
        $foods = Food::All();
        $users = User::all();
        $orders = Order::all();
        return view('admin.Dashboard.order.create', compact('foods', 'users', 'orders'));
    }



    public function storeOrder(Request $request)
    {
        try {
            $request->validate([
                'quantity' => 'required',
                'food_id' => 'required'
            ]);
            $order = new Order();
            $order->quantity = $request->quantity;
            $order->food_id = $request->food_id;
            $order->user_id = auth()->user()->id;
            $order->save();

            toastr()->success('Order created successfully!');
            return redirect()->route('order.index');
        } catch (Exception $exception) {
            toastr()->error('Error While Creating Payment!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showOrder($id)
    {
        $foods = Food::All();
        $users = User::all();
        $orders = Order::find($id);
        return view('admin.Dashboard.order.edit', compact('foods', 'users', 'orders'));
    }



    public function updateOrder(Request $request, $id)
    {
        try {
            $request->validate([
                'quantity' => 'required',
                'food_id' => 'required'
            ]);
            $order = Order::find($id);
            $order->quantity = $request->quantity;
            $order->food_id = $request->food_id;
            $order->user_id = auth()->user()->id;
            $order->update();

            toastr()->success('Order Updated successfully!');
            return redirect()->route('order.index');
        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While updating Payment!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteOrder($id)
    {
        $data = Order::find($id);
        $data->delete();
        toastr()->success('Order Deleted Successfully!!!');
        return redirect()->back();
    }



    public function changeStatus($id)
    {
        $order = Order::find($id)->first();
        $order->status = !$order->status;
        $order->update();
        toastr()->success('Status Changed');
        return redirect()->back()->with('success', 'Status Changed');
    }
}
