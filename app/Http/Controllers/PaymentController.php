<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Exception;
use App\Models\User;
use App\Models\PaymentMethod;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $payment = Payment::all();
        return view('admin.Dashboard.payment.index', compact('payment'));
    }


    public function createPayment()
    {
        $rooms = Room::all();
        $users = User::all();
        $paymentMethods = PaymentMethod::all();
        return view('admin.Dashboard.payment.create', compact('rooms', 'users', 'paymentMethods'));
    }


    public function storePayment(Request $request)
    {
        try {
            $request->validate([
                'total_payment' => 'required',
                'payment_method_id' => 'required'
            ]);
            $payment = new Payment();
            $payment->total_payment = $request->total_payment;
            $payment->payment_method_id = $request->payment_method_id;
            $payment->room_id = $request->room_id;
            $payment->user_id = auth()->user()->id;
            $payment->save();

            toastr()->success('Payment created successfully!');
            return redirect()->route('payment.index');
        } catch (Exception $exception) {

            toastr()->error('Error While Creating Payment!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showPayment($id)
    {
        $rooms = Room::all();
        $users = User::all();
        $paymentMethods = PaymentMethod::all();
        $payments = Payment::find($id);
        return view('admin.Dashboard.payment.edit', compact('rooms', 'users', 'paymentMethods', 'payments'));
    }


    public function updatePayment(Request $request, $id)
    {
        try {
            $request->validate([
                'total_payment' => 'required',
                'payment_method_id' => 'required'
            ]);
            $payment = Payment::find($id);
            $payment->total_payment = $request->total_payment;
            $payment->payment_method_id = $request->payment_method_id;
            $payment->room_id = $request->room_id;
            $payment->user_id = auth()->user()->id;
            $payment->update();

            toastr()->success('Payment Updated successfully!');
            return redirect()->route('payment.index');
        } catch (Exception $exception) {

            toastr()->error('Error While Updating Payment!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

    public function deletePayment($id)
    {
        $data = Payment::find($id);
        $data->delete();
        toastr()->success('Payment Deleted Successfully!!!');
        return redirect()->back();
    }




    // payment verification

    // verify payment
    public function verifyPayment(Request $request)
    {
        $token = $request->token;
        $amount = $request->amount;

        $args = http_build_query(array(
            'token' => $token,
            'amount'  => $amount,
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $secret_key = config('app.khalti_secret_key');

        $headers = ["Authorization: Key $secret_key"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }


    // payment store function
    public function paymentStore(Request $request)
    {

        $data = json_decode($request->response);

        dd($data);
    }
}
