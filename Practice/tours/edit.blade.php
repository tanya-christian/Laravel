@extends('welcome')

@section('content')
<center>
<h1>Edit Tour Details</h1>
</center>
<br>
<form action="{{route('tours.update',$tour->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <label for="packagename">Package Name</label>
    <select id="packagename" name="packagename" required>
        <option value="">SELECT PACKAGE</option>
        <option value="israle" {{$tour->packagename == 'israle' ? 'selected':''}}>Israle</option>
        <option value="kashmir" {{$tour->packagename == 'kashmir' ? 'selected':''}}>Kashmir</option>
        <option value="paris" {{$tour->packagename == 'paris' ? 'selected':''}}>Paris</option>
</select>
    <br>
    <br>
    <label for="destination">Destination</label>
    <input type="text" id="destination" name="destination" required value="{{$tour->destination}}">
    <br>
    <br>
    <label for="duration">Duration</label>
    <input type="text" id="duration" name="duration" required value="{{$tour->duration}}">
    <br>
    <br>
    <label for="price">Price</label>
    <input type="text" id="price" name="price" required value="{{$tour->price}}">
    <br>
    <br>
    <button type="submit">Edit Details</button>
@endsection

