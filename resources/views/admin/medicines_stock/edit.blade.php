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

                        <form action="{{ route('medicines_stock.update', $medicine->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- Medicines Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Medicine Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="medicine_id" class="form-control">
                                        @foreach ($medicine2 as $id => $value)
                                            <option value="{{ $id }}" @if($medicine->medicine_id ==($id)) selected @endif>{{ $value }}</option>
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
                                    <input type="text" name="batch_id" class="form-control"
                                        value="{{ $medicine->batch_id }}">
                                </div>
                            </div>
                            <br>
                            {{-- Expire Date --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Expire Date <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="expire_date" class="form-control"
                                        value="{{ $medicine->expire_date }}">
                                </div>
                            </div>
                            <br>
                            {{-- Quantity --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">M.Quantity <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="quantity" class="form-control"
                                        value="{{ $medicine->quantity }}">
                                </div>
                            </div>
                            <br>
                            {{-- MRP --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">MRP <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="mrp" class="form-control" value="{{ $medicine->mrp }}">
                                </div>
                            </div>
                            <br>
                            {{-- Rate --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Rate <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="rate" class="form-control" value="{{ $medicine->rate }}">
                                </div>
                            </div>
                            <br>
                            {{-- button --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary">Update</button></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
