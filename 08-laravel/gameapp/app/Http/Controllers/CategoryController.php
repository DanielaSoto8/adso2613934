<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = Category::all();
        $categories = Category::paginate(20);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $user)
    {
        //
    }
}
