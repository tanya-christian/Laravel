<h2>Hotel Details</h2>
<a href="{{route('hotels.create')}}">Book Room</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Hotel Name</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>
            <th>Room Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $hotel)
        <tr>
            <td>{{$hotel->name}}</td>
            <td>{{$hotel->chechindate}}</td>
            <td>{{$hotel->checkoutdate}}</td>
            <td>{{$hotel->room}}</td>
            
            <td>
                <a href="{{route('hotels.show',$hotel->id)}}">View</a>
                <a href="{{route('hotels.edit',$hotel->id)}}">Edit</a>
                <form action="{{route('hotels.destroy',$hotel->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete record.')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>       