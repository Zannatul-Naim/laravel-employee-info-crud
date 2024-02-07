@extends('layout')


@section('page-content')

    <h1>{{$employee->name}} 's Info</h1>

    <table class="table table-striped table-bordered">
        <tr>
            <td>Name</td>
            <td>{{$employee->name}}</td>
        </tr>
        <tr>
            <td>Job Title</td>
            <td>{{$employee->job_title}}</td>
        </tr>
        <tr>
            <td>Joining Date</td>
            <td>{{$employee->joining_date}}</td>
        </tr>
        <tr>
            <td>Salary</td>
            <td>{{$employee->salary}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$employee->email}}</td>
        </tr>
        <tr>
            <td>Mobile No</td>
            <td>{{$employee->mobile_no}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$employee->address}}</td>
        </tr>

    </table>

@endsection
