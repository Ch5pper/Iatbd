<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #f1f1f1;
            padding: 10px;
        }

        .navbar a {
            color: #000;
            text-decoration: none;
            margin-right: 8px;
        }

        h1 {
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .product-details {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .product-details h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product-details p {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Ga terug') }}
            </x-nav-link>
        </div>
    </div>

    <h1>Product Details</h1>

    <div class="product-details">
        <h2>{{ $item->name }}</h2>
        <p>{{ $item->description }}</p>
        <!-- Display other product details as needed -->
    </div>

    <!-- Add any additional content or styling as needed -->
</body>
</html>
