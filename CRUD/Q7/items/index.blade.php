<h2>Items</h2>
<br>
<a href="{{route('items.create')}}">Add Items</a>
<br>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->desc}}</td>
            <td>{{$item->price}}</td>
            <td>
                <a href="{{route('items.edit',$item->id)}}">Edit</a>
                <form action="{{route('items.create',$item->id)}}" method="POST">
                    @csrf 
                    @method('GET')
                    <button type="submit">Add</button>
                </form>
                <form action="{{route('items.destroy',$item->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete the item.')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


            

