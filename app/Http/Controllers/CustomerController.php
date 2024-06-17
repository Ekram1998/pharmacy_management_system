<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        return view("admin.customers.index")->with('customer', $customer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'contact_number' => 'required|min:11|max:15',
            'address' => 'required',
            'doctor_name' => 'required',
            'doctor_address' => '',
        ]);

        $newCustomer = Customer::create($data);
        return redirect(url('admin/customers'))->with('success', 'Customer Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        return view('admin.customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required|min:11|max:15',
            'address' => 'required',
            'doctor_name' => 'required',
            'doctor_address' => '',
        ]);

        $customer = Customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect(url('admin/customers'))->with('success', 'Customer Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        $customer->delete();
        return redirect(url('admin/customers'))->with('error', 'Customer Delete Successfully');
    }
}
