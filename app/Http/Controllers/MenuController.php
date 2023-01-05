<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::paginate(10);
        return view('menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
//
//        return $request;

        $menu = new Menu();
        $menu->menuName = $request->menuName;
        $menu->slug = Str::slug($request->menuName);
        $menu->amount = $request->amount;
        $menu->category_id = $request->category;
        $menu->user_id = Auth::id();

        if($request->hasFile('featured_image')){
            $newName = uniqid()."_featured_image.".$request->file('featured_image')->getextension();
            $request->file('featured_image')->storeAs("public",$newName);
            $menu->featured_image = $newName;
        }
//        return $menu;

        $menu->save();

        return redirect()->route('menu.index')->with('status', $menu->menuName .' is added Successfully' );
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view("menu.edit",compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {

//        return $request;

        $menu->menuName = $request->menuName;
        $menu->slug = Str::slug($request->menuName);
        $menu->amount = $request->amount;
        $menu->category_id = $request->category;
        $menu->menuStatus = $request->menuStatus;
        $menu->user_id = Auth::id();
//        return $menu;

        if($request->hasFile('featured_image')){

            //delete old photo
            Storage::delete("public/".$menu->featured_image);

            // update and upload new photo
            $newName = uniqid()."_featured_image.".$request->file('featured_image')->extension();
            $request->file('featured_image')->storeAs("public",$newName);
//            $request->featured_image->storeAs();
            $menu->featured_image = $newName;

        }


        $menu->update();

        return redirect()->route('menu.index')->with('status', $menu->menuName .' is added Successfully' );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {

//        return $menu->category;
        $menu->delete();
        return redirect()->route('menu.index')->with('status', $menu->menuName .' is deleted Successfully' );
    }

}
