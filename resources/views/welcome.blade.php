<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>History</title>
  </head>
  <body>
    <table>
      <thead>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Status</th>
        <th>Order Date</th>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
          <td>{{$order->customer()->first()->firstname}} {{$order->customer()->first()->lastname}}</td>
          <td>{{$order->product()->first()->name}}</td>
          <td>{{$order->product()->first()->price}}</td>
          <td>{{$order->product_quantity}}</td>
          <td>{{$order->total}}</td>
          <td>{{$order->status}}</td>
          <td>{{$order->order_date}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
