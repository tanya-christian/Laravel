@extends('welcome')

@section('content')
<h1>This is Order Page</h1>
<p>Please Enter your Order Details</p>

<form method="POST" action="/submitform">
    @csrf
    
    <label for="item">Item Name</label>
    <input type="text" id="item" name="item" required>
    <br>
    <br>

    <label for="category">Category</label>
    <select id="category" name="category">
        <option value="">Select Category</option>
        <option value="sandwich">Sandwich</option>
        <option value="Burger">Burher</option>
        <option value="south indian">South Indian</option>
    </select>
    <br>
    <br>

    <label for="des">Description</label>
    <input type="typem" id="des" name="des" ty required>
    <br>
    <br>

    <label for="price">Price</label>
    <input type="text" id="price" name="price" required>
    <br>
    <br>

    <button type="submit">Place Order</button>

</form>
@endsection