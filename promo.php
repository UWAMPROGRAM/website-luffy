<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luffiaa Design Print - Promo</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a.active {
            color: #000;
            border-bottom: 2px solid #000;
        }

        /* Header Styling */
        .header {
            text-align: center;
            padding: 50px 20px;
            background: url('your-background-image.jpg') center/cover;
            color: white;
        }
        .header h1 {
            font-size: 2em;
            margin: 0;
        }

        /* Product Grid Styling */
        .product-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
        }
        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
            padding: 15px;
        }
        .product-card img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product-card h3 {
            margin: 10px 0;
            font-size: 1em;
            font-weight: normal;
        }
        .product-card p {
            color: red;
            font-weight: bold;
            text-decoration: line-through;
        }
        .product-card .discount-price {
            color: #17a2b8;
            font-size: 1.2em;
            font-weight: bold;
        }
        .product-card .sold-count {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 15px;
        }
        .product-card button {
            padding: 10px 20px;
            background-color: #17a2b8;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        /* Footer Styling */
        .footer {
            background-color: #17a2b8;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 0.9em;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <a href="#">Beranda</a>
    <a href="#">Profil</a>
    <a href="#">Produk</a>
    <a href="#" class="active">Promo</a>
    <a href="#">Notifikasi</a>
    <a href="#">Pesanan Saya</a>
    <a href="#">Info</a>
</div>

<!-- Header Section -->
<div class="header">
    <h1>PROMO LUFFIAA DESIGN PRINT</h1>
</div>

<!-- Product Grid Section -->
<div class="product-grid">
    <!-- Product Card 1 -->
    <div class="product-card">
        <img src="img/kunci1.jpg" alt="Jasa Desain">
        <h3>Jasa Desain</h3>
        <p>Rp 10.000</p>
        <div class="discount-price">Rp 5.000</div>
        <div class="sold-count">10 terjual</div>
        <button>PESAN</button>
    </div>

    <!-- Product Card 2 -->
    <div class="product-card">
        <img src="img/kunci2.jpg" alt="Jasa Melukis">
        <h3>Jasa Melukis</h3>
        <p>Rp 10.000</p>
        <div class="discount-price">Rp 5.000</div>
        <div class="sold-count">10 terjual</div>
        <button>PESAN</button>
    </div>
</div>

<!-- Footer Section -->
<div class="footer">
    <p>LUFFIAA DESIGN PRINT</p>
    <p>JALAN POROS MAJENE, CAMPALAGIAN, DESA BOTTO</p>
    <p>0857-5744-2508</p>
    <p><a href="mailto:iaaluffy@gmail.com">iaaluffy@gmail.com</a></p>
</div>

</body>
</html>
