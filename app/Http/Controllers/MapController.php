<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{

    public function index()
    {
        $map = Map::all();
        return view('admin.Dashboard.map.index', compact('map'));
    }


    public function createMap()
    {
        return view('admin.Dashboard.map.create');
    }


    public function storeMap(Request $request)
    {
        $request->validate([
            // validate everything
        ]);

        $map = new Map();
        $map->name = $request->name;
        $map->longitude = $request->lng;
        $map->latitude = $request->lat;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/map/'), $filename);
            $map->image = $filename;
        }
        $map->save();
        return redirect()->route('map.index');
    }


    public function deleteMap($id)
    {
        $data = Map::find($id);
        $data->delete();
        toastr()->success('Map Deleted Successfully!!!');
        return redirect()->back();
    }
}
