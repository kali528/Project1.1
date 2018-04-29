<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Address;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = new Customer;
        $customers = $customer->getCustomers();

        return view('customers.index', compact('customers'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer_address = new Address;
        
        $customer_address->country = $request->country;
        $customer_address->state = $request->state;
        $customer_address->region = $request->region;
        $customer_address->city = $request->city;
        $customer_address->zip = $request->pk;
        $customer_address->save();

        $customer = new Customer;
        $customer->name = $request->name; 
        $customer->bulstad = $request->bulstad;
        $customer->eik = '0987654321';
        $customer->mol = $request->mol;
        $customer->address_id = $customer_address->id;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        // dd($customer);
        $customer->save();

        return redirect()->action('CustomerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
