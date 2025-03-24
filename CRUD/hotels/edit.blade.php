<h2>Edit Hotel Bookings Detail</h2>
<form action="{{route('hotels.update',$hotel->id)}}" method="POST">
    @csrf 
    @method('PUT')

    <label for="name">Hotel Name</label>
    <input type="text" id="name" name="name" required value="{{$hotel->name}}">
    <br>

    <label for="chechindate">Check In Date</label>
    <input type="text" id="chechindate" name="chechindate" required value="{{$hotel->chechindate}}">
    <br>

    <label for="checkoutdate">Check Out Date</label>
    <input type="text" id="checkoutdate" name="checkoutdate" required value="{{$hotel->checkoutdate}}">
    <br>

    <label for="room">Room Type</label>
    <select id="room" name="room" required>{{$hotel->room}}
        <option value="">Select Room Type</option>
        <option value="special">Special Room</option>
        <option value="deluxe">Deluxe Room</option>
        <option value="super">Super Deluxe Room</option>
    </select>
    <br>

    <button type="submit">Book Room</button>

</form>