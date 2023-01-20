<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Illuminate\Support\Facades\File;
use Exception;


class FoodController extends Controller
{
    
    public function index()
    {
        $food = Food::all();
        return view('admin.Dashboard.food.index', compact('food'));
        
    }

    
    public function createFood()
    {
        return view('admin.Dashboard.food.create');
    }

    public function storeFood(Request $request)
    {
        try {
            $request -> validate([
                'food_name'=> 'required',
                'price'=> 'required'
            ]);
            $food = new Food();

            if ($request->file('image')){
                $image_dest = 'admin/images/food/'.$food->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/food/'), $filename);
                $food-> image = $filename;
            }
            $food->food_name = $request->food_name;
            $food->price = $request->price;
            $food->save();

            toastr()->success('Food created successfully!');
            return redirect()->route('food.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating Food!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showFood(Request $request, $id)
    {
        $food = Food::find($id);
        return view('admin.Dashboard.food.edit',compact('food'));
    }

    public function updateFood(Request $request, $id)
    {
        try {
            $request -> validate([
                'food_name'=> 'required',
                'price'=> 'required'
            ]);
            $food = Food::find($id);

            if ($request->file('image')){
                $image_dest = 'admin/images/food/'.$food->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/food/'), $filename);
                $food-> image = $filename;
            }
            $food->food_name = $request->food_name;
            $food->price = $request->price;
            $food->update();

            toastr()->success('Food updated successfully!');
            return redirect()->route('food.index');

        } catch (Exception $exception) {
            toastr()->error('Error While updating Food!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteFood($id)
    {
        $data =Food::find($id);
        $image_dest = 'admin/images/food/' . $data->image;
        if (File::exists($image_dest)) {
            File::delete($image_dest);
        }
        $data->delete();
        toastr()->success('Food Deleted Successfully!!!');
        return redirect()->back();
    }
}
