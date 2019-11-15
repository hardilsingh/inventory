<?php

namespace App\Http\Controllers;

use App\CategoryDevice;
use Illuminate\Http\Request;

class CategoryDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryDevice::all();
        return view('admin.categories.device.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.device.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        CategoryDevice::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/device');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryDevice  $CategoryDevice
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryDevice $CategoryDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryDevice  $CategoryDevice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryDevice::findOrFail($id);
        return view('admin.categories.device.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryDevice  $CategoryDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryDevice::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/device');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryDevice  $CategoryDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryDevice::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
