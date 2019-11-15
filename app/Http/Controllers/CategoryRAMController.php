<?php

namespace App\Http\Controllers;

use App\CategoryRAM;
use Illuminate\Http\Request;

class CategoryRAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryRAM::all();
        return view('admin.categories.ram.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.ram.create');
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

        CategoryRAM::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/ram');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryRAM  $CategoryRAM
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryRAM $CategoryRAM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryRAM  $CategoryRAM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryRAM::findOrFail($id);
        return view('admin.categories.ram.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryRAM  $CategoryRAM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryRAM::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/ram');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryRAM  $CategoryRAM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryRAM::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
