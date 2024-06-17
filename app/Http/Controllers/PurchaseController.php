<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchase = Purchase::all();
        return view("admin.purchases.index", compact("purchase"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::pluck("name", "id");
        $invoice = Invoice::pluck("id");
        return view('admin.purchases.create', compact('supplier', 'invoice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'supplier_id' => 'required',
            'invoice_id' => 'required',
            'voucher_number' => 'required',
            'purchase_date' => 'required',
            'total_amount' => 'required',
            'payment_status' => 'required',
        ]);

        $newpurchase = Purchase::create($data);
        return redirect(url('admin/purchases'))->with('success', 'Purchases Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        $purchase = Purchase::find($purchase->id);
        return view('admin.purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        $supplier = Supplier::pluck("name", "id");
        $invoice = Invoice::pluck("id");
        $purchase = Purchase::find($purchase->id);
        return view('admin.purchases.edit', compact('purchase', 'supplier', 'invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'supplier_id' => 'required',
            'invoice_id' => 'required',
            'voucher_number' => 'required',
            'purchase_date' => 'required',
            'total_amount' => 'required',
            'payment_status' => 'required',
        ]);

        $purchase = Purchase::find($purchase->id);
        $input = $request->all();
        $purchase->update($input);
        return redirect(url('admin/purchases'))->with('success', 'Purchase Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        $purchase = Purchase::find($purchase->id);
        $purchase->delete();
        return redirect(url('admin/purchases'))->with('error', 'Purchase Delete Successfully');
    }
}
