<h2>Enter Menu Item Details</h2>
<form action="{{route('items.store')}}" method="POST">
    @csrf 
    <lable for="name">Item Name</lable>
    <input type="text" id="name" name="name" required>
    <br>
    <br>
    <lable for="category">Category</lable>
    <select id="category" name="category" required>
        <option value="">Select Item</option>
        <option value="Burger">Burger</option>
        <option value="Pizza">Pizza</option>
        <option value="Milkshake">Milkshake</option>
        <option value="Coffee">Coffee</option>
    </select>
    <br>
    <br>
    <lable for="desc">Description</lable>
    <input type="text" id="desc" name="desc" required>
    <br>
    <br>
    <lable for="price">Price</lable>
    <input type="text" id="price" name="price" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>