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
          <td>{{ number_format($item ->price, '2', ',', '.') . ' VNĐ'}}</td>
          <td>{{ number_format($item ->quantity * $item ->price, '2', ',', '.') . ' VNĐ'}}</td>
          <td>{{ $item ->order_id}}</td>
          <td>{{ App\Product::find($item ->product_id)->name }}</td>
    </tr>
    <?php $total+=$item->quantity * $item->price ?>
    @endforeach
	</tbody>
	</table>
	<p style="float: right;"><b>Total: {{ number_format($total, '2', ',', '.') . ' VNĐ' }}</b></p> 
</body>
</html>