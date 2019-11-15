<?php

namespace App\Http\Controllers;

use App\CategoryUsage;
use Illuminate\Http\Request;

class CategoryUsageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryUsage::all();
        return view('admin.categories.usage.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.usage.create');
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

        CategoryUsage::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/usage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryUsage  $CategoryUsage
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryUsage $CategoryUsage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryUsage  $CategoryUsage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryUsage::findOrFail($id);
        return view('admin.categories.usage.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryUsage  $CategoryUsage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryUsage::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/usage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryUsage  $CategoryUsage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryUsage::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
