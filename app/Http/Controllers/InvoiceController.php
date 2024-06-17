<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view("admin.invoices.index", compact("invoice"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::pluck("name", "id");
        return view('admin.invoices.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $date = $request->validate([
            'net_total' => 'required',
            'invoice_date' => 'required',
            'customer_id' => 'required',
            'total_amount' => 'required',
            'total_discount' => '',
        ]);

        $invoice = Invoice::create($date);
        return redirect(url('admin/invoices'))->with('success', 'Invoice Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        $invoice = Invoice::find($invoice->id);
        return view('admin.invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        $customer = Customer::pluck('name', 'id');
        $invoice = Invoice::find($invoice->id);
        return view('admin.invoices.edit', compact('invoice', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'net_total' => 'required',
            'invoice_date' => 'required',
            'customer_id' => 'required',
            'total_amount' => 'required',
            'total_discount' => '',
        ]);

        $invoice = Invoice::find($invoice->id);
        $input = $request->all();
        $invoice->update($input);
        return redirect(url('admin/invoices'))->with('success', 'Invoice Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice = Invoice::find($invoice->id);
        $invoice->delete();
        return redirect(url('admin/invoices'))->with('error', 'Invoice Delete Successfully');
    }
}
