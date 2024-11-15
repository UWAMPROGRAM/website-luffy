<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <style>
        /* Style dasar untuk halaman */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        /* Style untuk header */
        header {
            background-color: #ffffff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            height: 50px;
        }

        nav a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        /* Style untuk konten notifikasi */
        .notification-banner {
            background-image: url('your-image-url-here.jpg'); /* Ganti dengan URL gambar latar belakang */
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 60px 20px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        /* Style untuk card notifikasi */
        .notification-card {
            max-width: 600px;
            background-color: white;
            margin: -30px auto 20px auto;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-card img {
            width: 70px;
            border-radius: 5px;
        }

        .notification-card p {
            margin: 0;
            font-size: 16px;
        }

        /* Style untuk footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        footer p, footer a {
            margin: 5px 0;
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <img src="logo-url-here.png" alt="Logo" />
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Profil</a>
            <a href="#">Produk</a>
            <a href="#">Promo</a>
            <a href="#">Notifikasi</a>
            <a href="#">Pesanan Saya</a>
            <a href="#">Info</a>
        </nav>
    </header>

    <!-- Banner Notifikasi -->
    <div class="notification-banner">
        NOTIFIKASI SAYA
    </div>

    <!-- Card Notifikasi -->
    <div class="notification-card">
        <img src="image-url-here.jpg" alt="Gambar Produk">
        <div>
            <p><strong>Pesanan Telah Tiba</strong></p>
            <p>Pesanan 23723872391UMT7823A dengan nomor resi JNTD0238429438A Telah tiba di tujuan</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>LUFFIAA DESIGN PRINT</p>
        <p>JALAN POROS MAJENE, CAMPALAGIAN, DESA BOTTO</p>
        <p>📞 085757442508 | 📧 ialuffy@gmail.com</p>
        <p>© Luffiaa_design_print</p>
    </footer>

</body>
</html>
