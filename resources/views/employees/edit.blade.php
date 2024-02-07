@extends('layout')


@section('page-content')
    <form action="{{route('employees.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $employee->id }}">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{old('name', $employee->name)}}" maxlength="255"><br>
        <div>{{$errors->first('name')}}</div>
        <label for="job_title">Job Title:</label><br>
        <input type="text" id="job_title" name="job_title" value="{{old('job_title', $employee->job_title)}}" maxlength="100"><br>
        <div>{{$errors->first('job_title')}}</div>
        <label for="joining_date">Joining Date:</label><br>
        <input type="date" id="joining_date" name="joining_date" value="{{old('joining_date', $employee->joining_date)}}"><br>
        <div>{{$errors->first('joining_date')}}</div>
        <label for="salary">Salary:</label><br>
        <input type="number" id="salary" name="salary" value="{{old('salary', $employee->salary)}}" step="0.01"><br>
        <div>{{$errors->first('salary')}}</div>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{old('email', $employee->email)}}"><br>
        <div>{{$errors->first('email')}}</div>
        <label for="mobile_no">Mobile No:</label><br>
        <input type="tel" id="mobile_no" name="mobile_no" value="{{old('mobile_no', $employee->mobile_no)}}"><br>
        <div>{{$errors->first('mobile_no')}}</div>
        <label for="address">Address:</label><br>
        <textarea id="address" name="address" >{{ old('address', $employee->address) }}</textarea><br>
        <div>{{$errors->first('address')}}</div>
        <input type="submit" value="Submit">
    </form>
@endsection
