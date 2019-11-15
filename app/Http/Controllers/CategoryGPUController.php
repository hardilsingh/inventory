<?php

namespace App\Http\Controllers;

use App\CategoryGPU;
use Illuminate\Http\Request;

class CategoryGPUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryGPU::all();
        return view('admin.categories.gpu.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.gpu.create');
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

        CategoryGPU::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/gpu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryGPU  $CategoryGPU
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryGPU $CategoryGPU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryGPU  $CategoryGPU
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryGPU::findOrFail($id);
        return view('admin.categories.gpu.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryGPU  $CategoryGPU
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryGPU::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/gpu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryGPU  $CategoryGPU
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryGPU::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
