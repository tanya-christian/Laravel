<h2>{{$product->name}}</h2>
<p><strong>Description:</strong>{{$product->desc}}</p>
<p><strong>Price:</strong>{{$product->price}}</p>
<p><strong>Quantity:</strong>{{$product->quantity}}</p>
<p><strong>Product Type:</strong>{{$product->type}}</p>

<a href="{{route('products.index')}}">Go Back</a>