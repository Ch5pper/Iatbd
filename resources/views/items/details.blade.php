<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<style>
/* Your CSS styles here */
</style>
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
