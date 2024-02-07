@extends('layout')


@section('page-content')
    <h1>Employee Info</h1>
    <div class="col-lg-2">
        <a href="{{route('employees.create')}}" class="btn btn-primary">New Employee</a>
    </div>
    <div class="col-lg-10">
        <form action="{{route('employees.index')}}" method="get">

            <div class="row">
                <div class="col-8">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" value="{{request('search')}}">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Joining Date</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($employees as $e)
            <tr>
                <td>{{$e['id']}}</td>
                <td>{{$e['name']}}</td>
                <td>{{$e['job_title']}}</td>
                <td>{{$e['joining_date']}}</td>
                <td>{{$e['salary']}}</td>
                <td>{{$e['email']}}</td>
                <td>{{$e['mobile_no']}}</td>
                <td>{{$e['address']}}</td>
                <td>
                    <a href={{route('employees.show', $e['id'])}}>Show</a>
                </td>
                <td>
                    <a href={{route('employees.edit', $e['id'])}}>Edit</a>
                </td>
                <td>
                    <form  method="post" action="{{route('employees.destroy')}}" onsubmit=" return confirm('Are You Sure?')">
                        @csrf
                        <input type="hidden" name="id" value="{{$e['id']}}">
                        <input type="submit" style="padding: 0; margin: 0" value="Delete" class="btn btn-link text-danger"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{$employees->links()}}
@endsection
