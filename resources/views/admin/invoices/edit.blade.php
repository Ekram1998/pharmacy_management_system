@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add Invoice</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Invoice</h5>

                        <form action="{{ route('invoices.update', $invoice->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- Customer Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Customer Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="customer_id" class="form-control">
                                        @foreach ($customer as $id => $value)
                                            <option value="{{ $id }}"
                                                @if ($invoice->customer_id == $id) selected @endif>{{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- Net Total --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Net Total <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="net_total" class="form-control"
                                        value="{{ $invoice->net_total }}">
                                </div>
                            </div>
                            <br>
                            {{-- Invoice Date --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Invoice Date <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="invoice_date" class="form-control"
                                        value="{{ $invoice->invoice_date }}">
                                </div>
                            </div>
                            <br>
                            {{-- Total Amount --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Total Amount <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" class="form-control"
                                        value="{{ $invoice->total_amount }}">
                                </div>
                            </div>
                            <br>
                            {{-- Total Discount --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Total Discount <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_discount" class="form-control"
                                        value="{{ $invoice->total_discount }}">
                                </div>
                            </div>
                            <br>
                            {{-- button --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary">Update</button></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
