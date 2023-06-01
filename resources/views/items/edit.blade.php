<!-- resources/views/items/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        .item-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        .form-control {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #cccccc;
        }
        
        .button {
            background-color: #2596be; /* Green */
            border-radius: 20px;
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
        
        .button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            color: black;
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


<h1>Edit Item</h1>

<form action="{{ route('items.update', $item) }}" method="POST" class="item-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Naam</label>
        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
    </div>
    <div class="form-group">
        <label for="image" class="form-label">Afbeelding</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
            <label for="category" class="form-label">Categorie</label>
        <select name="category" id="category" required class="form-control">
            <option value="Meubilair">Meubilair</option>
            <option value="Elekronika">Elekronika</option>
            <option value="Kleding">Kleding</option>
            <option value="Other">Other</option>
        </select>
        </div>
    <div class="form-group">
        <label for="description" class="form-label">Beschrijving</label>
        <textarea name="description" class="form-control" required>{{ $item->description }}</textarea>
    </div>
    <button type="submit" class="button button2">Update</button>
</form>
</body>
</html>
