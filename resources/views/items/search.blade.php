<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

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

        .product-card .price {
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }

        .search-bar {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #cccccc;
        }

        .search-button {
            background-color: #2596be;
            border-radius: 20px;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            margin-left: 10px;
            border: none;
            cursor: pointer;
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

    <h1>Time2share Leenmarkt</h1>

    <div class="search-bar">
        <form action="{{ route('items.search') }}" method="GET">
            <input type="text" name="search" class="search-input" placeholder="Search products...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <div class="products">
        @foreach($items as $item)
            <div class="product-card">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image">
                @else
                    <img src="https://via.placeholder.com/300x200.png?text=No+Image" alt="No Image">
                @endif
                <div class="product-info">
                <h2>{{ $item->name }}</h2>
                <h3>Categorie: {{ $item->category }}</h3>
                <p><b>Beschrijving:</b> {{ $item->description }}</p>
                    <br>
                    <button class="button button2">Leen</button>
                    <a href="{{ route('items.show', $item) }}" class="button button2">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
