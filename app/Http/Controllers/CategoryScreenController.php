<?php

namespace App\Http\Controllers;

use App\CategoryScreen;
use Illuminate\Http\Request;

class CategoryScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = CategoryScreen::all();
        return view('admin.categories.screen_size.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.categories.screen_size.create');
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

        CategoryScreen::create($request->all());
        $request->session()->flash('created', 'Created successfully');
        return redirect('/screen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryScreen  $CategoryScreen
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryScreen $CategoryScreen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryScreen  $CategoryScreen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $category = CategoryScreen::findOrFail($id);
        return view('admin.categories.screen_size.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryScreen  $CategoryScreen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        CategoryScreen::findOrFail($id)->update($request->all());
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/screen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryScreen  $CategoryScreen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        CategoryScreen::findOrFail($id)->delete();
        session()->flash('deleted', 'Deleted Successfully');
        return redirect()->back();
    }
}
