<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Units;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Units::orderBy('name')->get();
        return view('units.index', ['units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Units::$rules, Units::$messages);

        // Units::create($request->all());

        $units=new Units();
        $units->name = $request->name;
        $units->unit_level = $request->unit_level;
        $units->is_active = $request->is_active ? true : false;

        $units->save();

        return redirect()->route('units.index')
            ->with('success', 'Unit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit=Units::find($id);
        return view('units.show', ['unit' => $unit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit=Units::find($id);
        return view('units.edit', ['unit' => $unit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(Units::$rules, Units::$messages);

        // Units::create($request->all());

        $units=Units::find($id);
        $units->name = $request->name;
        $units->unit_level = $request->unit_level;
        $units->is_active = $request->is_active ? true : false;

        $units->save();

        return redirect()->route('units.index')
            ->with('success', 'Unit update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit=Units::find($id);
        $unit->delete();

        return redirect()->route('units.index')
            ->with('success', 'Unit deleted successfully.');
    }
}
