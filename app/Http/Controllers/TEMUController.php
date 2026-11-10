<?php

namespace App\Http\Controllers;

use App\Models\TEMU;
use App\Http\Requests\StoreTEMURequest;
use App\Http\Requests\UpdateTEMURequest;

class TEMUController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreTEMURequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TEMU $tEMU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TEMU $tEMU)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTEMURequest $request, TEMU $tEMU)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TEMU $tEMU)
    {
        //
    }
}
