<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Cart_Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCart_ItemsRequest;
use App\Http\Requests\UpdateCart_ItemsRequest;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Cart_Items::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCart_ItemsRequest $request)
    {
        //
        return Cart_Items::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart_Items $cart_Item)
    {
        //
        return $cart_Item;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCart_ItemsRequest $request, string|int $id)
    {
        //
        $cart_item = Cart_Items::query()->findOrFail($id);
        $cart_item->update();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cart_item = Cart_Items::query()->findOrFail($id);
        $cart_item->delete();
    }
}
