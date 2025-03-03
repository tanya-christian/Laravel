@extends('welcome')

@section('content')
<center>
<h1>Your Order is Placed</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Item Name</th>
            <td>{{$item}}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{$category}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{$des}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$price}}</td>
        </tr>
    </table>
    <a href="{{url('/')}}">Go back to Home Page</a>
</center>

@endsection