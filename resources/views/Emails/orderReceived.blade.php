<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
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
            color: #fff; /* White */
            margin: 0;
        }

        p {
            color: #333;
            line-height: 1.6;
        }

        strong {
            color: #f0ad4e; /* Yellow */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="banner">
        <h1>Ate Carla's Bacsilog | Order Received</h1>
    </div>

    <p>Hello Admin! Our customer Mr/Ms/Mrs <b>{{ $orderDetails['customerFirstName'] }} {{ $orderDetails['customerLastName'] }} </b>,
         with the order ID <b>{{ $orderDetails['orderID'] }}</b> has been received and marked as completed.</p>

</div>

</body>
</html>
