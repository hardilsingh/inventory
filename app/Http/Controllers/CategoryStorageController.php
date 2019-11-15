<?php

namespace App\Http\Controllers;

use App\CategoryStorage;
use Illuminate\Http\Request;

class CategoryStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryStorage::all();
        return view('admin.categories.storage.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.storage.create');
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

        CategoryStorage::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/storage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryStorage  $CategoryStorage
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryStorage $CategoryStorage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryStorage  $CategoryStorage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryStorage::findOrFail($id);
        return view('admin.categories.storage.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryStorage  $CategoryStorage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryStorage::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/storage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryStorage  $CategoryStorage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryStorage::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
