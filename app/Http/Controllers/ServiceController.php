<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Room;
use App\Models\serviceCategory;
use Illuminate\Support\Facades\File;
use Exception;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
 
    public function index()
    {
        $service = Service::all();
        return view('admin.dashboard.service.index', compact('service'));
    }

    
    public function createService()
    {
        $rooms = Room::all();
        $serviceCategorys = ServiceCategory::all();
        return view('admin.Dashboard.service.create',compact('rooms','serviceCategorys'));
    }

    
    public function storeService(Request $request)
    {
        try {
            $request -> validate([
                
                'service_type'=> 'required',
            ]);
            $service = new Service();
            $service->service_type = $request-> service_type;
            $service->room_id = $request->room_id;
            $service->save();

            toastr()->success('Service created successfully!');
            return redirect()->route('service.index');

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Creating Service !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

    
    public function showService($id)
    {
        $services = Service::find($id);
        $rooms = Room::all();
        $serviceCategorys = ServiceCategory::all();
        return view('admin.Dashboard.service.edit',compact('rooms','services','serviceCategorys'));
    }

    
    public function updateService(Request $request, $id)
    {
        try {
            $request -> validate([
                
                'service_type'=> 'required',
            ]);
            $service = Service::find($id);
            $service->service_type = $request-> service_type;
            $service->room_id = $request->room_id;
            $service->update();

            toastr()->success('Service created successfully!');
            return redirect()->route('service.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating Service !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteService(Request $request, $id)
    {
        $data = Service::find($id);
        $data->delete();
        toastr()->success('Service Deleted Successfully!!!');
        return redirect()->back();
    
    }
    public function userService()
    {
        $services = serviceCategory::all();
        return view('user.service.index',compact('services'));
    }
}
