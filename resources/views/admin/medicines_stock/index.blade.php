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
        <h1>Medicines Stock List</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('medicines_stock.create') }}" class="btn btn-primary">Add New Stock Medicine</a>
                        </h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID NO</th>
                                    <th scope="col">Medicine Name</th>
                                    <th scope="col">Batch ID</th>
                                    <th scope="col">Expire Date</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($medicine as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->medicine->name }}</td>
                                        <td>{{ $value->batch_id }}</td>
                                        <td>{{ $value->expire_date }}</td>
                                        <td>{{ $value->quantity }}</td>
                                        <td>{{ date('d-m-y H:i:s', strtotime($value->created_at)) }}</td>
                                        <td id="outer">
                                            {{-- show --}}
                                            <a href="{{ route('medicines_stock.show', $value->id) }}"
                                                class="inner btn btn-info"><i class="bi bi-eye"></i></a>
                                            {{-- Edit --}}
                                            <a href="{{ route('medicines_stock.edit', $value->id) }}"
                                                class="inner btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            {{-- Delete --}}
                                            <form class="inner" method="POST"
                                                action="{{ route('medicines_stock.destroy', $value->id) }}"
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
