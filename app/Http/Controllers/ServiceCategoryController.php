<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Exception;


class ServiceCategoryController extends Controller
{

    public function index()
    {
    
        $serviceCategory = ServiceCategory::all();
        return view('admin.Dashboard.serviceCategory.index', compact('serviceCategory'));
    }

   
    public function createServiceCategory()
    {
        return view('admin.Dashboard.serviceCategory.create');
    }

   
    public function storeServiceCategory(Request $request)
    {
        try {
            $request -> validate([
                'service_name'=> 'required',
                'description'=> 'required'
            ]);
            
            $serviceCategory = new ServiceCategory();
            $serviceCategory->service_name = $request->service_name;
            $serviceCategory->description = $request->description;
            $serviceCategory->save();

            toastr()->success('Service Category created successfully!');
            return redirect()->route('serviceCategory.index');

        } catch (Exception $exception) {
            dd($exception);

            toastr()->error('Error While Creating Service Category!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showServiceCategory($id)
    {
        $serviceCategory = ServiceCategory::find($id);
        return view('admin.Dashboard.serviceCategory.edit',compact('serviceCategory'));
    }


    public function updateServiceCategory(Request $request, $id)
    {
        try {
            $request -> validate([
                'service_name'=> 'required',
                'description'=> 'required'
            ]);
            $serviceCategory = ServiceCategory::find($id);
            $serviceCategory->service_name = $request->service_name;
            $serviceCategory->description = $request->description;
            $serviceCategory->save();

            toastr()->success('Service Category created successfully!');
            return redirect()->route('serviceCategory.index');

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Creating Service Category!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteServiceCategory(Request $request, $id)
    {
        $data = ServiceCategory::find($id);
        $data->delete();
        toastr()->success('Room Category Deleted Successfully!!!');
        return redirect()->back();
    }
}
