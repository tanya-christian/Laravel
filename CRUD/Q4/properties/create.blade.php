<h2>Enter Property Details</h2>
<form action="{{route('properties.store')}}" method="POST">
    @csrf 
    <lable for="address">Address</lable>
    <input type="text" id="address" name="address" required>
    <br>
    <br>

    <lable for="type">Property Type</lable>
    <select id="type" name="type" required>
        <option value="">Select Property Type</option>
        <option value="house">House</option>
        <option value="apartment">Apartment</option>
        <option value="farm">Farm</option>
    </select>
    <br>
    <br>

    <lable for="price">Price</lable>
    <input type="text" id="price" name="price" required>
    <br>
    <br>

    <lable for="desc">Description</lable>
    <input type="text" id="desc" name="desc" required>
    <br>
    <br>

    <button type="submit">Submit</button>