<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorepasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepasienRequest $request, pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pasien $pasien)
    {
        //
    }
}
