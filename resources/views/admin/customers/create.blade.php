@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add Customer</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>

                        <form action="{{ url('admin/customers') }}" method="POST">
                            @csrf
                            {{-- Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Name <span style="color: red"> *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Contact Number --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Contact Number <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_number" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Address --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Address <span style="color: red"> *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Doctor Name --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Doctor Name <span style="color: red">
                                        *</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_name" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            {{-- Doctor Address --}}
                            <div class="row md-3">
                                <label class="col-sm-2 col-form-label">Doctor Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_address" class="form-control">
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
