<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view("admin.suppliers.index", compact("supplier"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
        ]);

        $newsupplier = Supplier::create($data);
        return redirect(url('admin/suppliers'))->with('success', 'Supplier Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        $supplier = Supplier::find($supplier->id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        $supplier = Supplier::find($supplier->id);
        return view('admin.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
        ]);

        $supplier = Supplier::find($supplier->id);
        $input = $request->all();
        $supplier->update($input);
        return redirect(url('admin/suppliers'))->with('success', 'Supplier Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $customer = Supplier::find($supplier->id);
        $customer->delete();
        return redirect(url('admin/suppliers'))->with('error', 'Supplier Delete Successfully');
    }
}
