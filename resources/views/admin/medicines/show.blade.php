@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Medicine Information</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('medicines.index') }}" class="btn btn-primary">Back To Home</a>
                        </div>

                        <table class="table table-bordered">
                            <h1>{{ $medicine->name }} Medicine Info</h1>
                            <thead>
                                <tr>
                                    <th>Id No</th>
                                    <th>{{ $medicine->id}}</th>
                                </tr>
                                <tr>
                                    <th>Medicine Name</th>
                                    <td>{{ $medicine->name }}</td>
                                </tr>
                                <tr>
                                    <th>Paking</th>
                                    <td>{{ $medicine->paking }}</td>
                                </tr>
                                <tr>
                                    <th>Generic Name</th>
                                    <td>{{ $medicine->generic_name }}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Name</th>
                                    <td>{{ $medicine->supplier->name }}</td>
                                </tr>
                                <tr>
                                    <th>Create At ID</th>
                                    <td>{{ date('d-m-y  H:i:s', strtotime($medicine->created_at)) }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
