<h1>Listado de productos</h1>
@foreach($products as $product)
  <h3>{{ $product->name }}</h3>
<img src="{{ $product->image }}" width='250'>
@endforeach