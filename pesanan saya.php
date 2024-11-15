<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luffiaa Design Print - Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        /* Tambahan CSS untuk layout pesanan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .order-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .order-table tr {
            border-bottom: 1px solid #ddd;
        }
        .order-table td {
            padding: 15px;
            vertical-align: middle;
        }
        .order-image {
            width: 100px;
            border-radius: 10px;
        }
        .order-info {
            font-size: 1.1em;
            color: #333;
        }
        .order-quantity {
            font-weight: bold;
        }
        .order-total {
            color: red;
            font-weight: bold;
        }
        .order-actions {
            display: flex;
            justify-content: space-between;
        }
        .btn-action {
            padding: 10px 20px;
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
        }
        .btn-action.reject {
            background-color: #ff4d4d;
        }
        .btn-action:hover {
            opacity: 0.8;
        }
        footer {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="order-header">
        <h1>Produk Luffiaa Design Print</h1>
    </header>

    <table class="order-table">
        <!-- Pesanan 1 -->
        <tr>
            <td><img src="img/kunci1.jpg" alt="Gantungan kunci" class="order-image"></td>
            <td>
                <div class="order-info">GANTUNGAN KUNCI COSTUM</div>
                <div class="order-quantity">x5</div>
            </td>
            <td>
                <div class="order-total">Rp 50.000</div>
                <div>Total pesanan</div>
            </td>
            <td>
                <div class="order-actions">
                    <button class="btn-action reject">Tolak Pesanan</button>
                    <button class="btn-action">Kirim Pesanan</button>
                </div>
            </td>
        </tr>
        
        <!-- Pesanan 2 -->
        <tr>
            <td><img src="img/kunci2.jpg" alt="Stiker Hologram Rainbow A4" class="order-image"></td>
            <td>
                <div class="order-info">STIKER HOLOGRAM RAINBOW A4</div>
                <div class="order-quantity">x10</div>
            </td>
            <td>
                <div class="order-total">Rp 100.000</div>
                <div>Total pesanan</div>
            </td>
            <td>
                <div class="order-actions">
                    <button class="btn-action reject">Tolak Pesanan</button>
                    <button class="btn-action">Kirim Pesanan</button>
                </div>
            </td>
        </tr>
    </table>

    <footer>
        &copy; Luffiaa_design_print
    </footer>
</div>

</body>
</html>
