@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add Purchase</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Purchase</h5>

                        <form action="{{ url('admin/purchases') }}" method="POST">
                            @csrf
                            {{-- Supplier Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Supplier Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="supplier_id" class="form-control">
                                        <option value="">Select Supplier Name</option>
                                        @foreach ($supplier as $id => $value)
                                            <option value="{{ $id }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- Invoice Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Invoice ID <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="invoice_id" class="form-control">
                                        <option value="">Select Invoice Id</option>
                                        @foreach ($invoice as $value)
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- Voucher Number --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Voucher No <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="voucher_number" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Purchase Date --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Purchase Date <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="purchase_date" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Total Amount --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Total Amount <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Payment Status --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Payment Status <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="payment_status" class="form-control" required>
                                        <option value="">Select payment Status</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Accept</option>
                                        <option value="3">Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- button --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary">Submit</button></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
