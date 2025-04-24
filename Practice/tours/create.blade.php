@extends('welcome')

@section('content')
<center>
<h1>Enter Tour Details</h1>
</center>
<br>
<form action="{{route('tours.store')}}" method="POST">
    @csrf 
    <label for="packagename">Package Name</label>
    <select id="packagename" name="packagename" required>
        <option value="">SELECT PACKAGE</option>
        <option value="israle">Israle</option>
        <option value="kashmir">Kashmir</option>
        <option value="paris">Paris</option>
</select>
    <br>
    <br>
    <label for="destination">Destination</label>
    <input type="text" id="destination" name="destination" required>
    <br>
    <br>
    <label for="duration">Duration</label>
    <input type="text" id="duration" name="duration" required>
    <br>
    <br>
    <label for="price">Price</label>
    <input type="text" id="price" name="price" required>
    <br>
    <br>
    <button type="submit">Book</button>
@endsection

