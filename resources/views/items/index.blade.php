<!-- resources/views/items/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Eigen producten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .alert {
            padding: 10px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .table th {
            background-color: #f5f5f5;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
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
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        }

        .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        color: black;
        }

        .button1 a{
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


    <h1>Mijn producten</h1>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Categorie</th>
                <th>Omschrijving</th>
                <th>Afbeelding</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('items.destroy', $item) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je het zeker?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<br>

<h1>Gemaakte items om te verlenen</h1>

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
            <p>{{ $item->description }}</p>
            <br>
            <button class="button button2">Leen</button>
            <a href="{{ route('items.show', $item) }}" class="button button2">View Details</a>
        </div>
    </div>
    @endforeach
</div>


</body>
</html>
