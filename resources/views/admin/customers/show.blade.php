@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Customers Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('customers.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $customer->id }}</th>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                                <tr>
                                    <th>Contact Number</th>
                                    <td>{{ $customer->contact_number }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                                <tr>
                                    <th>Doctor Name</th>
                                    <td>{{ $customer->doctor_name }}</td>
                                </tr>
                                <tr>
                                    <th>Doctor Address</th>
                                    <td>{{ $customer->doctor_address }}</td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($customer->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
