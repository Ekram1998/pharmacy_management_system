@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Invoice Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('invoices.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $invoice->id }}</th>
                                </tr>
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{ $invoice->customer->name }}</td>
                                </tr>
                                <tr>
                                    <th>Net Total</th>
                                    <td>{{ $invoice->net_total }}</td>
                                </tr>
                                <tr>
                                    <th>Invoice Date</th>
                                    <td>{{ date('d-m-y', strtotime($invoice->invoice_date)) }}</td>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <td>{{ $invoice->total_amount }}</td>
                                </tr>
                                <tr>
                                    <th>Total Discount</th>
                                    <td>{{ $invoice->total_discount }}</td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($invoice->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
