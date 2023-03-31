<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Exception;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;



class UserOrderController extends Controller
{
    
    public function index()
    {
        $foods = Food::all();
        return view('user.order.index', compact('foods'));
    }

    public function store(Request $request, $id)
    {
        try {
            $request -> validate([
                'quantity'=> 'required',
            ]);
            $foods = Food::find($id);
            $order = new Order();
            $order->quantity = $request->quantity;
            $order->food_id = $foods->id;
            $order->user_id = auth()->user()->id;
            $order->save();

            
            toastr()->success('Order Done successfully!');
            return redirect()->back();

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Ordering Food!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

    public function showOrder()
    {
        $orders = Order::all();
        return view('user.order.show',compact('orders'));
    }

    public function deleteOrder($id)
    {
        $data = Order::find($id);
        $data->delete();
        toastr()->success('Order Deleted Successfully!!!');
        return redirect()->back();
    }
}
