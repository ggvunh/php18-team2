<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head><!--/head-->
<body>
<h1>Order Detail</h1>
	<table>
	<thead>
	<tr>
		<th>ID</th>
		<th>Salary</th>
		<th>Price</th>
		<th>Subtotal</th>
		<th>Order Id</th>
		<th>Product Name</th>
	</tr>
	</thead>
	<tbody>
	<?php  $total = 0; ?>
    @foreach ($items as $item)
     <tr>
          <td>{{ $item ->id}}</td>
          <td>{{ $item ->quantity}}</td>
          <td>{{ number_format($item ->price, '2', ',', '.') . ' VND'}}</td>
          <td>{{ number_format($item ->quantity * $item ->price, '2', ',', '.') . ' VND'}}</td>
          <td>{{ $item ->order_id}}</td>
          <?php $product = App\Product::find($item->product_id); ?>
          @if (empty($product))
          <td> Product deleted or stopped business</td>
          @else
          <td>{{ $product->name}}</td>
          @endif
    </tr>
    <?php $total+=$item->quantity * $item->price ?>
    @endforeach
	</tbody>
	</table>
	<p style="float: right;"><b>Total: {{ number_format($total, '2', ',', '.') . ' VND' }}</b></p> 
</body>
</html>