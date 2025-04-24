@extends('welcome')

@section('content')
<center>
<h1>Tour Details</h1>
</center>
<br>
<table border="1" cellpadding="8">
    <thead>
    <tr>
        <th>Package Name</th>
        <th>Destination</th>
        <th>Duration</th>
        <th>Price</th>
        <th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($tours as $tour)
    <tr>
        <td>{{$tour->packagename}}</td>
        <td>{{$tour->destination}}</td>
        <td>{{$tour->duration}}</td>
        <td>{{$tour->price}}</td>
        <td>
            <a href="{{route('tours.edit',$tour->id)}}">EDIT</a>
            <a href="{{route('tours.show',$tour->id)}}">VIEW</a>
            <form action="{{route('tours.destroy',$tour->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this tour?')">DELETE</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection

