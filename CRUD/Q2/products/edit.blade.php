<center>
<h2>Edit Product Details</h2>
<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" required value="{{$product->name}}">
    <br>
    <br>

    <label for="desc">Description</label>
    <input type="text" id="desc" name="desc" required value="{{$product->desc}}">
    <br>
    <br>

    <label for="price">Price</label>
    <input type="text" id="price" name="price" required value="{{$product->price}}">
    <br>
    <br>

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" required value="{{$product->quantity}}">
    <br>
    <br>

    <label for="type">Product Type</label>
    <select id="type" name="type" required>{{$product->type}}
        <option value="">Select Product Type</option>
        <option value="P1">Electronics</option>
        <option value="P2">Stationary</option>
        <option value="P3">Decore</option>
    </select>
    <br>
    <br>

    <button type="submit">Done</button>

</form>
</center>
