<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Maker;
use App\Models\Model;
use App\Models\Body;
use App\Http\Requests\BasicRequest;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Maker::all();
        $models = Model::all();
        $bodies = Body::all();

        return view('vehicles.create', compact('makers', 'models', 'bodies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $vehicle  = new Vehicle();
        $vehicle->makers_id;
        $vehicle->models_id;
        $vehicle->bodies_id;
        $vehicle->reg_plate = $request->input('reg_plate');
        $vehicle->vin = $request->input('vin');
        $vehicle->save();
 
        return redirect()->route('vehicles.index')->with('success', "{$vehicle->reg_plate} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
