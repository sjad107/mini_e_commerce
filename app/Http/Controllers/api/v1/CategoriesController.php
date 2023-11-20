<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Categories::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        //
        return Categories::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        //
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, string|int $id)
    {
        //
        $category = Categories::query()->findOrFail($id);
        return $category->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category = Categories::query()->findOrFail($id);
        $category->delete();
    }
}
