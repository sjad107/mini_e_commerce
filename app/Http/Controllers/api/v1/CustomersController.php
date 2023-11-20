<?php

namespace App\Http\Controllers\api\v1;
use App\Models\Customers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use App\Http\Resources\v1\CustomersCollection;
use App\Http\Resources\v1\CustomersResource;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new CustomersCollection(Customers::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomersRequest $request)
    {
        //
        return Customers::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customer)
    {
        //dd($customer);
        // Return the customer.
        return new CustomersResource($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomersRequest $request,string|int $id){
        $customer  = Customers::query()->findOrFail($id);
        $customer->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $custoemr = Customers::query()->findOrFail($id);
        $custoemr->delete();
    }
}
