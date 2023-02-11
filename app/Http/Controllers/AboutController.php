<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;
use Exception;

class AboutController extends Controller
{
    
    public function index()
    {   
        $abouts = About::all();
        return view('admin.Dashboard.about.index', compact('abouts'));
        
    }

    
    public function createAbout()
    {
        return view('admin.Dashboard.about.create');
    }

    public function storeAbout(Request $request)
    {
        try {
            $request -> validate([
                'description'=> 'required',
                'image'=> 'required'
            ]);
            $abouts = new About();

            if ($request->file('image')){
                $image_dest = 'admin/images/food/'.$abouts->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/about/'), $filename);
                $abouts-> image = $filename;
            }
            $abouts->description = $request->description;
            
            $abouts->save();

            toastr()->success('Abours info created successfully!');
            return redirect()->route('about.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating About page info!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showAbout(Request $request, $id)
    {
        $abouts = About::find($id);
        return view('admin.Dashboard.about.edit',compact('abouts'));
    }

    public function updateAbout(Request $request, $id)
    {
        try {
            $request -> validate([
                'description'=> 'required',
                'image'=> 'required'
            ]);
            $abouts =About::find($id);

            if ($request->file('image')){
                $image_dest = 'admin/images/about/'.$abouts->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/about/'), $filename);
                $abouts-> image = $filename;
            }
            $abouts->description = $request->description;
            
            $abouts->update();

            toastr()->success('Abours info created successfully!');
            return redirect()->route('about.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating About page info!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteAbout($id)
    {
        $data =About::find($id);
        $image_dest = 'admin/images/about/' . $data->image;
        if (File::exists($image_dest)) {
            File::delete($image_dest);
        }
        $data->delete();
        toastr()->success('About page info Deleted Successfully!!!');
        return redirect()->back();
    }
}
