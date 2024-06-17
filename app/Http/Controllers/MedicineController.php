<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Faker\Provider\Medical;
use Illuminate\Http\Request;
use App\Models\Supplier;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine = Medicine::all();
        return view("admin.medicines.index")->with('medicine', $medicine);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::pluck('name', 'id');
        return view("admin.medicines.create", compact("supplier"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'paking' => 'required',
            'generic_name' => 'required',
            'supplier_id' => 'required',
        ]);

        $newMedicine = Medicine::create($data);
        return redirect(url('admin/medicines'))->with('success', 'New Medicine Added Succesffully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        $medicine = Medicine::find($medicine->id);
        return view('admin.medicines.show')->with('medicine', $medicine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        $supplier = Supplier::pluck('name', 'id');
        $medicine = Medicine::find($medicine->id);
        return view('admin.medicines.edit', compact('medicine', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required',
            'paking' => 'required',
            'generic_name' => 'required',
            'supplier_id' => 'required',
        ]);

        $customer = Medicine::find($medicine->id);
        $input = $request->all();
        $customer->update($input);
        return redirect(url('admin/medicines'))->with('success', 'Medicine Update Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine = Medicine::find($medicine->id);
        $medicine->delete();
        return redirect(url('admin/medicines'))->with('error', 'Medicine Delete Succesffully');
    }
}
