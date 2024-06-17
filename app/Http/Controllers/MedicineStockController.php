<?php

namespace App\Http\Controllers;

use App\Models\Medicine_stock;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine = Medicine_stock::all();
        return view("admin.medicines_stock.index", compact("medicine"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicine = Medicine::pluck("name", "id");
        return view("admin.medicines_stock.create", compact("medicine"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'medicine_id' => 'required',
            'batch_id' => 'required',
            'expire_date' => 'required',
            'quantity' => 'required',
            'mrp' => 'required',
            'rate' => 'required',
        ]);

        $medicine = Medicine_stock::create($data);
        return redirect(url('admin/medicines_stock'))->with('success', 'New Medicine Stock Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine_stock $medicine_stock, string $id)
    {
        $medicine2 = Medicine::pluck('name', 'id');
        $value = Medicine_stock::find($id);
        return view('admin.medicines_stock.show', compact('value', 'medicine2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine_stock $medicine_stock, string $id)
    {
        $medicine2 = Medicine::pluck('name', 'id');
        $medicine = Medicine_stock::find($id);
        return view('admin.medicines_stock.edit', compact('medicine', 'medicine2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine_stock $medicine_stock, string $id)
    {
        // dd($request->all());
        $request->validate([
            'medicine_id' => 'required',
            'batch_id' => 'required',
            'expire_date' => 'required',
            'quantity' => 'required',
            'mrp' => 'required',
            'rate' => 'required',
        ]);
        $medicine = Medicine_stock::find($id);
        $input = $request->all();
        $medicine->update($input);
        return redirect(url('admin/medicines_stock'))->with('success', 'Medicine Stock Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine_stock $medicine_stock, string $id)
    {
        $medicine = Medicine_stock::find($id);
        $medicine->delete();
        return redirect(url('admin/medicines_stock'))->with('error', 'Medicine Delete Delete Successfully');
    }
}
