<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use App\Http\Requests\StoreVehiculosRequest;
use App\Http\Requests\UpdateVehiculosRequest;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = vehiculos::all();  
        return view('Vehiculos.index', compact('vehiculos'));
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculosRequest $request, Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculos $vehiculos)
    {
        //
    }
}
