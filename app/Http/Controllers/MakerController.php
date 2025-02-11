<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maker;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makers = Maker::all();
        return view('makers.index', ['makers' => $makers]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'makers.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maker  = new Maker();
        $maker->name = $request->input('name');
        $maker->logo = $request->input('logo');
        $maker->save();
 
        return redirect()->route('makers.index')->with('success', "{$maker->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $maker = Maker::find($id);
        return view('makers.show', compact('maker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $maker = Maker::find($id);
        return view('makers.edit', compact('maker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maker  = Maker::find($id);
        $maker->name = $request->input('name');
        $maker->save();

        return redirect()->route('makers.index')->with('success', "{$maker->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maker = Maker::find($id);
        if ($maker) {
            $maker->delete();
            return redirect()->route('makers.index')->with('success', 'Gyártó sikeresen törölve.');
        }
        return redirect()->route('makers.index')->with('error', 'Hiba történt a törlés során.');
    }
}
