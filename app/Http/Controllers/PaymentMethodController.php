<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\PaymentMethod;
use Exception;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymentMethod = PaymentMethod::all();
        return view('admin.Dashboard.paymentMethod.index', compact('paymentMethod'));
    }

   
    public function createPaymentMethod()
    {
        return view('admin.Dashboard.paymentMethod.create');
    }

   
    public function storePaymentMethod(Request $request)
    {
        try {
            $request -> validate([
                'payment_method'=> 'required',
                'description'=> 'required'
            ]);
            
            $paymentMethod = new PaymentMethod();
            $paymentMethod->payment_method = $request->payment_method;
            $paymentMethod->description = $request->description;
            $paymentMethod->save();

            toastr()->success('Payment Method created successfully!');
            return redirect()->route('paymentMethod.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating Payment Method!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showPaymentMethod($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        return view('admin.Dashboard.paymentMethod.edit',compact('paymentMethod'));
    }


    public function updatePaymentMethod(Request $request, $id)
    {
        try {
            $request -> validate([
                'payment_method'=> 'required',
                'description'=> 'required'
            ]);
            $paymentMethod = PaymentMethod::find($id);
            $paymentMethod->payment_method = $request->payment_method;
            $paymentMethod->description = $request->description;
            $paymentMethod->save();

            toastr()->success('Payment Method created successfully!');
            return redirect()->route('paymentMethod.index');

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Creating Payment Method!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deletePaymentMethod(Request $request, $id)
    {
        $data = PaymentMethod::find($id);
        $data->delete();
        toastr()->success('payment method Deleted Successfully!!!');
        return redirect()->back();
    }
}
