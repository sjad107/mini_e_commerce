<?php

namespace App\Http\Controllers\api\V1;
use App\Models\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;
use App\Http\Resources\v1;
use App\Http\Resources\v1\ItemsCollection;
use App\Http\Resources\v1\ItemsResource;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new ItemsCollection(Items::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemsRequest $request)
    {
        //
        return Items::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(Items $item)
    {
        //
        return new ItemsResource($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemsRequest $request, string|int $Id)
    {
        //
        $item = Items::query()->findOrFail($Id);
        return $item->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $item = Items::query()->findOrFail($id);
        $item->delete();
        
    }
}
