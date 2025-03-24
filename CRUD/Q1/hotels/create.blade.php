<h2>Enter Hotel Bookings Detail</h2>
<form action="{{route('hotels.store')}}" method="POST">
    @csrf 

    <label for="name">Hotel Name</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="chechindate">Check In Date</label>
    <input type="text" id="chechindate" name="chechindate" required>
    <br>

    <label for="checkoutdate">Check Out Date</label>
    <input type="text" id="checkoutdate" name="checkoutdate" required>
    <br>

    <label for="room">Room Type</label>
    <select id="room" name="room" required>
        <option value="">Select Room Type</option>
        <option value="special">Special Room</option>
        <option value="deluxe">Deluxe Room</option>
        <option value="super">Super Deluxe Room</option>
    </select>
    <br>

    <button type="submit">Book Room</button>

</form>