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

    }

    
    public function showMap($id)
    {

    }

  
    public function updateMap(Request $request, $id)
    {

    }

    public function deleteMap($id)
    {

    }
}
