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

        .product-details img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .review-form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .review-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .review-form input[type="text"],
        .review-form textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .review-form input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .review-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .review-comment {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
    <script>
        function handleSubmit(event) {
            event.preventDefault(); 

            var name = document.getElementById('name').value;
            var rating = document.getElementById('rating').value;
            var comment = document.getElementById('comment').value;

            var commentSection = document.createElement('div');
            commentSection.classList.add('review-comment');

            var commentHeading = document.createElement('h3');
            commentHeading.textContent = name + ' - Rating: ' + rating;

            var commentParagraph = document.createElement('p');
            commentParagraph.textContent = comment;

            commentSection.appendChild(commentHeading);
            commentSection.appendChild(commentParagraph);

            var productDetails = document.querySelector('.product-details');
            productDetails.insertAdjacentElement('afterend', commentSection);

            document.getElementById('name').value = '';
            document.getElementById('rating').value = '';
            document.getElementById('comment').value = '';
        }
    </script>
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
        @if($item->image)
        <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image">
        @else
        <img src="https://via.placeholder.com/300x200.png?text=No+Image" alt="No Image">
        @endif
        <h2>{{ $item->name }}</h2>
        <h3>Categorie: {{ $item->category }}</h3>
        <p><b>Beschrijving:</b> {{ $item->description }}</p>
    </div>

    <div class="review-form">
        <h2>Item Review</h2>
        <form onsubmit="handleSubmit(event)">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <input type="submit" value="Submit Review">
        </form>
    </div>
</body>
</html>
