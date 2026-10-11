@extends('layouts.app')
@section('content')

<div class="header">
    <h2>👥 Employee Management</h2>
    <span style="background:#e3f2fd; padding:10px 18px; border-radius:25px; font-weight:800; color:#0d6efd">{{ count($employees) }} Employees</span>
</div>

<div class="card blue-card">
    <form method="POST" action="{{ route('employee.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="emp_name" placeholder="Enter full name" required>
            </div>
            <div class="form-group">
                <label>Employee DOB</label>
                <input type="date" class="form-control" name="emp_dob" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="07X XXX XXXX" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">+ Register Employee</button>
    </form>
</div>

<div class="card white-card">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>EMPLOYEE NAME</th>
                <th>DOB</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <td><b>{{ ++$key }}</b></td>
                <td><b>{{ $employee->emp_name }}</b></td>
                <td>{{ $employee->dob }}</td>
                <td>{{ $employee->Phone }}</td>
                <td>
                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary" style="padding:8px 18px; font-size:14px">Edit</a>
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" style="padding:8px 18px; font-size:14px">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection