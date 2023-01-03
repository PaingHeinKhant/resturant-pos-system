<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTableStorageRequest;
use App\Http\Requests\UpdateTableStorageRequest;
use App\Models\TableStorage;

class TableStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTableStorageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableStorageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TableStorage  $tableStorage
     * @return \Illuminate\Http\Response
     */
    public function show(TableStorage $tableStorage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TableStorage  $tableStorage
     * @return \Illuminate\Http\Response
     */
    public function edit(TableStorage $tableStorage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTableStorageRequest  $request
     * @param  \App\Models\TableStorage  $tableStorage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTableStorageRequest $request, TableStorage $tableStorage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableStorage  $tableStorage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableStorage $tableStorage)
    {
        //
    }
}
