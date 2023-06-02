<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geleende items</title>
</head>
<style>
    .navbar {
        background-color: #f5f5f5;
        padding: 10px;
        display: flex;
        justify-content: flex-end;
    }

    .navbar a {
        color: #333333;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 3px;
    }

    .navbar a:hover {
        background-color: #cccccc;
    }
    .button {
        background-color: #2596be; /* Green */
        border-radius: 20px 20px 20px 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
    }

    .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        color: black;
    }

    .button1 a {
        color: #333333;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 3px;
    }

    .button1 a:hover {
        background-color: #cccccc;
    }

    .products {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 3rem;
    }

    .product-card {
        width: 100%;
        margin-bottom: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
    }

    .product-card img {
        width: 100%;
        max-width: 300px; 
        height: auto;
        object-fit: cover;
    }

    .product-card .product-info {
        padding: 10px;
    }

    .product-card h2 {
        font-size: 18px;
        margin: 0 0 10px 0;
    }

    .product-card p {
        margin: 0;
    }

    .product-card {
        width: 100%;
        max-width: 300px;
        margin-bottom: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
    }
</style>
<body>

<div class="navbar">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Ga terug') }}
        </x-nav-link>
    </div>
</div>




<h1>Geleende items</h1>

<h2>Geleend product:</h2>

<div class="product-card">
    @if(Session::has('geleend'))
        <div>
            <img src="{{ asset('storage/' . Session::get('geleend')->image) }}" alt="Product Image">
            <h2>Product: {{ Session::get('geleend')->name }}</h2>
            <p><b>Categorie:</b> {{ Session::get('geleend')->category }}</p>
            <p><b>Beschrijving:</b> {{ Session::get('geleend')->description }}</p>
            <p><b>Gemaakt door:</b> {{ Session::get('geleend')->madeBy->name ?? 'Unknown' }}</p>
        </div>
    @else
        <p>No product is currently stored.</p>
    @endif
</div>


</body>
</html>
