<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .products {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .product-card {
      width: 30%;
      margin-bottom: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }

    .product-card img {
      width: 100%;
      height: 200px; /* Set a fixed height for consistent image size */
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

    @media screen and (max-width: 960px) {
      .product-card {
        width: calc(100% / 2 - 20px);
      }
    }

    @media screen and (max-width: 640px) {
      .product-card {
        width: calc(100% - 20px);
      }
    }

    .buttonL {
      background-color: #2596be;
      border-radius: 20px 20px 20px 20px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s;
      transition-duration: 0.4s;
    }

    .buttonZ {
      background-color: white;
      border: solid 2px black;
      border-radius: 20px 20px 20px 20px;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s;
      transition-duration: 0.4s;
    }

    .buttonM {
      background-color: #cc0000;
      border-radius: 20px 20px 20px 20px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s;
      transition-duration: 0.4s;
    }

    .button2:hover {
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      color: black;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="products">
    <div class="product-card">
      <img src="{{ asset('images/Leen.jpeg') }}" alt="Product Image">
      <div class="product-info">
        <h2>LeenMarkt</h2>
        <p>Leen een product op de leen markt.</p>
        <a href="/Leenmarkt" class="buttonL button2">Leen</a>
      </div>
    </div>

    <div class="product-card">
      <img src="{{ asset('images/Eigen products.jpg') }}" alt="Product Image">
      <div class="product-info">
        <h2>Eigen producten</h2>
        <p>Bekijk jouw gemaakte producten.</p>
        <a href="/items" class="buttonZ button2">Zie</a>
      </div>
    </div>

    <div class="product-card">
      <img src="{{ asset('images/Maak.jpg') }}" alt="Product Image">
      <div class="product-info">
        <h2>Maken van producten</h2>
        <p>Maak jouw eigen gemaakte producten.</p>
        <a href="/items/create" class="buttonM button2">Maak</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
