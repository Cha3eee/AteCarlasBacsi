<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Rejected Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .banner {
            background-color: #d9534f; /* Red */
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            color: #f0ad4e;
            margin: 0;
        }

        p {
            color: #333;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="banner">
        <h1>Ate Carla's Bacsilog</h1>
    </div>

    <h1>Order Rejected Notification</h1>

    <p><b>Order Status:</b> {{ $status }}</p>
    <p><b>Name of Customer:</b> {{ $orderDetails['customerFirstName'] }} {{ $orderDetails['customerLastName'] }}</p>
    <p><b>Order ID:</b> {{ $orderDetails['orderID'] }}</p>
    <p><b>Order Items:</b> {{ $orderDetails['orderItems'] }}</p>
    <p><b>Total Amount:</b> {{ $orderDetails['orderTotalAmount'] }}</p>
    <p><b>Delivery Date:</b> {{ $orderDetails['orderDeliveryDate'] }}</p>
    <p><b>Delivery Time:</b> {{ $orderDetails['orderDeliveryTime'] }}</p>
</div>

</body>
</html>
