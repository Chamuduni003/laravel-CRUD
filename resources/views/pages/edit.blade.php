@extends('layouts.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <h2 class="fw-bold mb-4">Edit Employee</h2>

    <div class="p-4 mb-4" style="background-color:#b3e0ff; border-radius:10px;">
        <form method="POST" action="{{ route('employee.update', $edit->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Employee Name</label>
                    <input type="text" class="form-control form-control-lg" name="emp_name" value="{{ $edit->emp_name }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Employee DOB</label>
                    <input type="date" class="form-control form-control-lg" name="emp_dob" value="{{ $edit->dob }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-bold">Phone</label>
                    <input type="text" class="form-control form-control-lg" name="phone" value="{{ $edit->Phone }}">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg px-5 mt-2">Update</button>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary btn-lg mt-2 ms-2">Back</a>
        </form>
    </div>
</div>
@endsection