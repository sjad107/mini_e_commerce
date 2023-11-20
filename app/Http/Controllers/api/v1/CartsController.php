<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Carts;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Carts::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartsRequest $request)
    {
        //
        return Carts::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Carts $cart)
    {
        //
        return $cart;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartsRequest $request, string|int $id)
    {
        //
        $cart = Carts::query()->findOrFail($id);
        $cart->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cart = Carts::query()->findOrFail($id);
        $cart->delete();

    }
}
