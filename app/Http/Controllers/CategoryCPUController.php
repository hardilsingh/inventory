<?php

namespace App\Http\Controllers;

use App\CategoryCPU;
use Illuminate\Http\Request;

class CategoryCPUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryCPU::all();
        return view('admin.categories.cpu.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.cpu.create');
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

        CategoryCPU::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/cpu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryCPU  $categoryCPU
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryCPU $categoryCPU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryCPU  $categoryCPU
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryCPU::findOrFail($id);
        return view('admin.categories.cpu.edit' , compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryCPU  $categoryCPU
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryCPU::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/cpu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryCPU  $categoryCPU
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryCPU::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
