@extends('welcome')
@section('content')
<h2>{{$tour->packagename}}</h2>
<p><strong>Destination:</strong>{{$tour->destination}}</p>
<p><strong>Duration:</strong>{{$tour->duration}}</p>
<p><strong>Price:</strong>{{$tour->price}}</p>

<a href="{{route('tours.index')}}">Go Back To Home Page</a>

@endsection