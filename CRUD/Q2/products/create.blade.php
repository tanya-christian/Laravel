<center>
<h2>Enter Product Details</h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf 

    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="desc">Description</label>
    <input type="text" id="desc" name="desc" required>
    <br>
    <br>

    <label for="price">Price</label>
    <input type="text" id="price" name="price" required>
    <br>
    <br>

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" required>
    <br>
    <br>

    <label for="type">Product Type</label>
    <select id="type" name="type" required>
        <option value="">Select Product Type</option>
        <option value="P1">Electronics</option>
        <option value="P2">Stationary</option>
        <option value="P3">Decore</option>
    </select>
    <br>
    <br>

    <button type="submit">Add Product</button>

</form>
</center>
