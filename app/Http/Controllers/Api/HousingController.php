<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Housing;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    public function index()
    {
        $houses = Housing::all();

        return response()->json($houses, 200);
    }

    public function store(Request $request)
    {
        $house = Housing::create([
            'img' => $request->img,
            'name' => $request->name,
            'description' => $request->description,
            'rooms' => $request->rooms,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'size' => $request->size,
            'price' => $request->price,
            'contactMail' => $request->contactMail,
        ]);

        $house->save();

        return response()->json($house, 200);
    }

    public function show(string $id)
    {
        $house = Housing::findOrFail($id);

        return response()->json($house, 200);
    }

    public function update(Request $request, string $id)
    {
        $house = Housing::findOrFail($id);

        $house->update([
            'img' => $request->img,
            'name' => $request->name,
            'description' => $request->description,
            'rooms' => $request->rooms,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'size' => $request->size,
            'price' => $request->price,
            'contactMail' => $request->contactMail,
        ]);
        
        $house->save();

        return response()->json($house, 200);
    }

    public function destroy(string $id)
    {
        $house = Housing::findOrFail($id);
        $house->delete();
    }
}
