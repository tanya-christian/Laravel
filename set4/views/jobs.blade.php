@extends('welcome')

@section('content')
<h1>This is Jobs Page</h1>
    <img src="{{ asset('images/img.png') }}" alt="Job 1">
    <p>Job 1</p>
    <p>20000</p>
    <img src="{{ asset('images/img.png') }}" alt="Job 2">
    <p>Job 2</p>
    <p>25000</p>
    <img src="{{ asset('images/img.png') }}" alt="Job 3">
    <p>Job 3</p>
    <p>30000</p>

    <center>
    <table border="1" cellpadding="8">
    <tr>
        <th>Job Title</th>
        <td>{{$title }}</td>
    </tr>
    <tr>
        <th>Category</th>
        <td>{{$category }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$des }}</td>
    </tr>
    <tr>
        <th>Salary</th>
        <td>{{$salary }}</td>
    </tr>
    </table>
    
    <a href="{{ url('/') }}">Go back to home page</a>
    </center>
    

@endsection