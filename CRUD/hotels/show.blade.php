<h2>{{$hotel->name}}</h2>
<p><strong>Check In Date:</strong>{{$hotel->chechindate}}</p>
<p><strong>Check Out Date:</strong>{{$hotel->checkoutdate}}</p>
<p><strong>Room Type:</strong>{{$hotel->room}}</p>

<a href="{{route('hotels.index')}}"> Go Back</a>