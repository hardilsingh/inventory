<?php

namespace App\Http\Controllers;

use App\CategoryManufacturer;
use Illuminate\Http\Request;

class CategoryManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryManufacturer::all();
        return view('admin.categories.manufacturer.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.manufacturer.create');
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

        CategoryManufacturer::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/manufacturer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryManufacturer  $CategoryManufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryManufacturer $CategoryManufacturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryManufacturer  $CategoryManufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryManufacturer::findOrFail($id);
        return view('admin.categories.manufacturer.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryManufacturer  $CategoryManufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryManufacturer::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/manufacturer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryManufacturer  $CategoryManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryManufacturer::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
