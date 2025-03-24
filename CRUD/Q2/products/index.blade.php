<h2>Product Details</h2>
<br>
<a href="{{route('products.create')}}">Add Products</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Product Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->desc}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->type}}</td>
            <td>
                <a href="{{route('products.edit',$product->id)}}">Edit</a>
                <a href="{{route('products.show',$product->id)}}">View</a>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete the product')">Delete</button>
                </form>
            </td>
        <tr>
        @endforeach
    </tbody>
</table>