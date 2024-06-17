@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Purchase Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('purchases.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $purchase->id }}</th>
                                </tr>
                                <tr>
                                    <th>Supplier Name</th>
                                    <td>{{ $purchase->supplier->name }}</td>
                                </tr>
                                <tr>
                                    <th>Invoice ID</th>
                                    <td>{{ $purchase->invoice_id }}</td>
                                </tr>
                                <tr>
                                    <th>Voucher Number</th>
                                    <td>{{ $purchase->voucher_number }}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Date</th>
                                    <td>{{ date('d-m-y', strtotime($purchase->purchase_date)) }}</td>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <td>{{ $purchase->total_amount }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    {{-- <td>{{ $purchase->payment_status }}</td> --}}
                                    <td>
                                        @if ($purchase->payment_status == 1) Pending
                                        @elseif ($purchase->payment_status == 2)
                                            Accept
                                        @elseif ($purchase->payment_status == 3)
                                            Cancel
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($purchase->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
