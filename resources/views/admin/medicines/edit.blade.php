@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Medicine</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Medicine</h5>

                        <form action="{{ route('medicines.update', $medicine->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- Medicine Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Medicine Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $medicine->name }}">
                                </div>
                            </div>
                            <br>
                            {{-- Paking --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Paking <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="paking" class="form-control"
                                        value="{{ $medicine->paking }}">
                                </div>
                            </div>
                            <br>
                            {{-- Generic Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Generic Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="generic_name" class="form-control"
                                        value="{{ $medicine->generic_name }}">
                                </div>
                            </div>
                            <br>
                            {{-- Supplier Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Supplier Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <select name="supplier_id" class="form-control">
                                        @foreach ($supplier as $id => $value)
                                        <option value="{{ $id }}" @if($medicine->supplier_id ==($id)) selected @endif>{{ $value }}</option>
                                        @endforeach
                                    </select>
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
