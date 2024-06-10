<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 100%; max-width: 800px; margin: auto; }
        .order { border-bottom: 1px solid #ddd; padding: 10px 0; }
        .order-header { font-size: 20px; font-weight: bold; margin-bottom: 10px; }
        .order-item { margin-bottom: 5px; }
        .order-total { font-size: 18px; font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Receipt</h1>

        @foreach ($orders as $order)
            <div class="order">
                <div class="order-header">Order for {{ $order->name }}</div>
                <div class="order-item"><strong>Email:</strong> {{ $order->email }}</div>
                <div class="order-item"><strong>Phone:</strong> {{ $order->phone }}</div>
                <div class="order-item"><strong>Address:</strong> {{ $order->address }}, {{ $order->street_name }}, {{ $order->building_name_no }}</div>
                <div class="order-item"><strong>Product:</strong> {{ $order->product_title }}</div>
                <div class="order-item"><strong>Quantity:</strong> {{ $order->quantity }}</div>
                <div class="order-item"><strong>Size:</strong> {{ $order->size }}</div>
                <div class="order-item"><strong>Color:</strong> {{ $order->color }}</div>
                <div class="order-item"><strong>Price:</strong> {{ $order->price }}</div>
                <div class="order-item"><strong>Delivery Status:</strong> {{ $order->delivery_status }}</div>
                <div class="order-item"><strong>Delivery Date:</strong> {{ $order->delivery_date }}</div>
                <div class="order-total">Total Price: {{ $order->total_price }}</div>
            </div>
        @endforeach

        <div class="footer">
            <p>Thank you for your order!</p>
        </div>
    </div>
</body>
</html>
