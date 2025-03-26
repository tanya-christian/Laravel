<h2>Edit Item Details</h2>
<form action="{{route('items.update',$item->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <lable for="name">Item Name</lable>
    <input type="text" id="name" name="name" required value="{{$item->name}}">
    <br>
    <br>
    <lable for="category">Item Name</lable>
    <select id="category" name="category" required>{{$item->category}}
        <option value="">Select Item</option>
        <option value="Burger">Burger</option>
        <option value="Pizza">Pizza</option>
        <option value="Milkshake">Milkshake</option>
        <option value="Coffee">Coffee</option>
    </select>
    <br>
    <br>
    <lable for="desc">Description</lable>
    <input type="text" id="desc" name="desc" required value="{{$item->desc}}">
    <br>
    <br>
    <lable for="price">Price</lable>
    <input type="text" id="price" name="price" required value="{{$item->price}}">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>