<h1>Listado de productos</h1>
@foreach($products as $products)
  <h3>{{$products->name}}</h3>
<img src="{{ $products->imge }}" width='250'>
@foreach