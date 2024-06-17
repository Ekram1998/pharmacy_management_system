@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Supplier</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supplier</h5>

                        <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Name <span style="color: red"> *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $supplier->name }}">
                                </div>
                            </div>
                            <br>
                            {{-- Email --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Supplier Email <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $supplier->email }}">
                                </div>
                            </div>
                            <br>
                            {{-- Contact Number --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Contact Number <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_number" class="form-control"
                                        value="{{ $supplier->contact_number }}">
                                </div>
                            </div>
                            <br>
                            {{-- Address --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Address <span style="color: red"> *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $supplier->address }}">
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
