<h2>Property Details</h2>
<br>
<a href="{{route('properties.create')}}">Add Property Details</a>
<br>
<table border="1" padding="8">
    <thead>
        <tr>
            <th>Address</th>
            <th>Property Type</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($properties as $property)
        <tr>
            <td>{{$property->address}}</td>
            <td>{{$property->type}}</td>
            <td>{{$property->price}}</td>
            <td>{{$property->desc}}</td>
            <td>
                <a href="{{route('properties.edit',$property->id)}}">Edit</a>
                <form action="{{route('properties.create',$property->id)}}" method="POST">
                    @csrf 
                    @method('GET')
                    <button type="submit">Add</button>
                </form>
                <form action="{{route('properties.destroy',$property->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete the details.')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>