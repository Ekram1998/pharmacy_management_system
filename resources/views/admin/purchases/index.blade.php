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
        <h1>Purchases List</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('purchases.create') }}" class="btn btn-primary">Add New Purchase</a>
                        </h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID NO</th>
                                    <th scope="col">Supplier Name</th>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Voucher Number</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">T.Amount</th>
                                    <th scope="col">Pament Status</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($purchase as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->supplier->name }}</td>
                                        <td>{{ $value->invoice_id }}</td>
                                        <td>{{ $value->voucher_number }}</td>
                                        <td>{{ date('d-m-y', strtotime($value->purchase_date)) }}</td>
                                        <td>{{ $value->total_amount }} .TK</td>
                                        <td>
                                            @if ($value->payment_status == 1)
                                                <p
                                                    style="background-color: rgb(199, 113, 33); color: white; padding: 8px; margin-right:20px; border-radius: 5px;">
                                                    Pending
                                                </p>
                                            @elseif($value->payment_status == 2)
                                                <p
                                                    style="background-color: green; color: white; padding: 8px; margin-right:20px; border-radius: 5px;">
                                                    Accept
                                                </p>
                                            @elseif($value->payment_status = 3)
                                                <p
                                                    style="background-color: red; color: white; padding: 8px; margin-right:20px; border-radius: 5px;">
                                                    Cancel
                                                </p>
                                            @endif
                                        </td>
                                        <td>{{ date('d-m-y H:i:s', strtotime($value->created_at)) }}</td>
                                        <td id="outer">
                                            {{-- show --}}
                                            <a href="{{ route('purchases.show', $value->id) }}"
                                                class="inner btn btn-info"><i class="bi bi-eye"></i></a>
                                            {{-- Edit --}}
                                            <a href="{{ route('purchases.edit', $value->id) }}"
                                                class="inner btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            {{-- Delete --}}
                                            <form class="inner" method="POST"
                                                action="{{ route('purchases.destroy', $value->id) }}"
                                                accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger" title="Delete Purchase"
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
