<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show_category');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('backEnd.category.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.category.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Category::create($request->all());

        Session::flash('message', 'Category added!');
        Session::flash('status', 'success');

        return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('backEnd.category.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('backEnd.category.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $category = Category::findOrFail($id);
        $category->update($request->all());

        Session::flash('message', 'Category updated!');
        Session::flash('status', 'success');

        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        Session::flash('message', 'Category deleted!');
        Session::flash('status', 'success');

        return redirect('admin/categories');
    }

    public function show_category(Category $category){

        return view('category', compact('category'));
    }

}
