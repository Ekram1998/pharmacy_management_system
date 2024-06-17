@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Medicines Stock Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('medicines_stock.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $value->id }}</th>
                                </tr>
                                <tr>
                                    <th>Medicine Name/ID</th>
                                    <td>{{ $value->medicine->name }}</td>
                                </tr>
                                <tr>
                                    <th>Batch ID</th>
                                    <td>{{ $value->batch_id }}</td>
                                </tr>
                                <tr>
                                    <th>Expire Date</th>
                                    <td>{{ $value->expire_date }}</td>
                                </tr>
                                <tr>
                                    <th>Medicines Quantity</th>
                                    <td>{{ $value->quantity }}</td>
                                </tr>
                                <tr>
                                    <th>MRP</th>
                                    <td>{{ $value->mrp }} TK</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{ $value->rate }} TK</td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($value->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
