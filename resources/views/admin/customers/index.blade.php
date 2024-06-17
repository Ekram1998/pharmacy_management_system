@extends('admin.layouts.app')

<style>
    #outer {
        width: auto;
        text-align: center;
    }

    .inner {
        padding: 3px;
        display: inline-block;
    }
</style>

@section('content')
    <div class="pagetitle">
        <h1>Customers List</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('customers.create') }}" class="btn btn-primary">Add New Customer</a>
                        </h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Doctor Address</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($customer as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->contact_number }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->doctor_name }}</td>
                                        <td>{{ $value->doctor_address }}</td>
                                        <td>{{ date('d-m-y H:i:s', strtotime($value->created_at)) }}</td>
                                        <td id="outer">
                                            {{-- show --}}
                                            <a href="{{ route('customers.show', $value->id) }}"
                                                class="inner btn btn-info"><i class="bi bi-eye"></i></a>
                                            {{-- Edit --}}
                                            <a href="{{ route('customers.edit', $value->id) }}"
                                                class="inner btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            {{-- Delete --}}
                                            <form class="inner" method="POST"
                                                action="{{ route('customers.destroy', $value->id) }}"
                                                accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger" title="Delete Customer"
                                                    onclick="return confirm('Are you sure! You want to Delete')"><i
                                                        class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
