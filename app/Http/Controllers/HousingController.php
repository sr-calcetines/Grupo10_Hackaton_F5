<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HousingController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $houses = Housing::All();

        return view('search', compact('houses'));
    }

    public function adminPanel(Request $request)
    {
        if ($request->action === 'delete') {
            $this->destroy($request->id);
            return redirect()->route('adminPanel');
        }

        $houses = Housing::All();

        return view('adminPanel', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if( Auth::user()){ /*Auth::user()->isAdmin===true || !Auth::user()->isAdmin===true */

            return view('createHouseForm');

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if( Auth::user()){
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

            return redirect()->route('search');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $house = Housing::findOrFail($id);
        return view('houseShow', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if( Auth::user()->isAdmin===true){

            $house = Housing::find($id);
            return view('editHouseForm', compact('house'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $house = Housing::find($id);

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
        return redirect()->route('search');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if( Auth::user()->isAdmin===true){

            $house = Housing::find($id);
            $house->delete();

        }
    }
}
