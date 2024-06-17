@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add Stock Medicine</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Stock Medicine</h5>

                        <form action="{{ url('admin/medicines_stock') }}" method="POST">
                            @csrf
                            {{-- Medicines Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Medicine Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="medicine_id" class="form-control" required>
                                        <option value="">Select Medicine Name</option>
                                        @foreach ($medicine as $id => $value)
                                            <option value="{{ $id }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- Batch ID --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Batch ID <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="batch_id" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Expire Date --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Expire Date <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="expire_date" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Quantity --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">M.Quantity <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="quantity" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- MRP --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">MRP <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="mrp" class="form-control">
                                </div>
                            </div>
                            <br>
                            {{-- Rate --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Rate <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="rate" class="form-control">
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
