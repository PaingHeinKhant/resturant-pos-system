<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Models\Menu;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::get();
        return view('table.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableRequest $request)
    {
//        return $request;
        $table = new Table();
        $table->tableName = $request->tableName;
        $table->slug = Str::slug($request->tableName);
        $table->capacity = $request->capacity;
        $table->tableStatus = $request->tableStatus;
        $table->user_id = Auth::id();
//        return $table;

        $table->save();
        return redirect()->route('table.index')->with('status', $table->tableName .' is added Successfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        return view("table.edit",compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTableRequest  $request
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTableRequest $request, Table $table)
    {

        $table->tableName = $request->tableName;
        $table->slug = Str::slug($request->tableName);
        $table->capacity = $request->capacity;
        $table->tableStatus = $request->tableStatus;
        $table->user_id = Auth::id();
//        return $menu;

        $table->save();

        return redirect()->route('table.index')->with('status', $table->menuName .' is Updated Successfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('table.index')->with('status', $table->tableName .' is deleted Successfully' );
    }

    public function tableCheck(){
        $tables = Table::get();
        return view('tablecheck.index',compact('tables'));
    }
}
