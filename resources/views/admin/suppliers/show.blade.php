@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Supplier Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $supplier->id }}</th>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $supplier->name }}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Email</th>
                                    <td>{{ $supplier->email }}</td>
                                </tr>
                                <tr>
                                    <th>Contact Number</th>
                                    <td>{{ $supplier->contact_number }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $supplier->address }}</td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($supplier->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
