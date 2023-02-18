<?php

namespace App\Http\Controllers;
use App\Models\offer;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    
    public function index()
    {
        $offers = Offer::all();
        return view('admin.Dashboard.offer.index', compact('offers'));
    }


    public function createOffer()
    {
        {
            return view('admin.Dashboard.offer.create');
        }
    
    }

    public function storeOffer(Request $request)
    {
        try {
            $request -> validate([
                'offer_name'=> 'required',
                
            ]);
            $offer = new Offer();

            if ($request->file('image')){
                $image_dest = 'admin/images/offer/'.$offer->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/offer/'), $filename);
                $offer-> image = $filename;
            }
            $offer->offer_name = $request->offer_name;
            $offer->save();

            toastr()->success('Offer created successfully!');
            return redirect()->route('offer.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating Offer!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showOffer($id)
    {
        $offers = Offer::find($id);
        return view('admin.Dashboard.offer.edit',compact('offers'));
    }

    public function updateOffer(Request $request, $id)
    {
        try {
            $request -> validate([
                'offer_name'=> 'required',
                
            ]);
            $offer = Offer::find($id);

            if ($request->file('image')){
                $image_dest = 'admin/images/offer/'.$offer->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/offer/'), $filename);
                $offer-> image = $filename;
            }
            $offer->offer_name = $request->offer_name;
            $offer->update();

            toastr()->success('Offer updated successfully!');
            return redirect()->route('offer.index');

        } catch (Exception $exception) {
            toastr()->error('Error While updating Offer!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteOffer($id)
    {
        $offers =Offer::find($id);
        $image_dest = 'admin/images/offer/' . $offers->image;
        if (File::exists($image_dest)) {
            File::delete($image_dest);
        }
        $offers->delete();
        toastr()->success('Offer Deleted Successfully!!!');
        return redirect()->back();
    }
}
