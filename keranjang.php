<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'navbar.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #000000;
            text-align: center;
            padding: 20px;
            color: white;
        }

        main {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .product-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .product-info {
            display: flex;
            align-items: center;
        }

        .product-info img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            margin-right: 10px;
        }

        .product-details {
            text-align: left;
        }

        .quantity {
            display: flex;
            align-items: center;
        }

        .quantity input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
        }

        .total-price {
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <h1>Keranjang Belanja Anda</h1>
</header>

<main>
    <h2>Isi Keranjang</h2>
    
    <div class="product-row">
        <div class="product-info">
            <img src="gambar/pastry.jpg" alt="Produk 1">
            <div class="product-details">
                <h4>Roti Pastry</h4>
                <p>Rp 40.000</p>
            </div>
        </div>
        <div class="quantity">
            <button onclick="decreaseQuantity(1)">-</button>
            <input type="text" value="0" id="quantity1">
            <button onclick="increaseQuantity(1)">+</button>
        </div>
        <div class="total-price" id="total-price1">
            Rp 0
        </div>
    </div>

    <div class="product-row">
        <div class="product-info">
            <img src="gambar/abonsapi.jpg" alt="Produk 2">
            <div class="product-details">
                <h4>Roti Abon Sapi</h4>
                <p>Rp 45.000</p>
            </div>
        </div>
        <div class="quantity">
            <button onclick="decreaseQuantity(2)">-</button>
            <input type="text" value="0" id="quantity2">
            <button onclick="increaseQuantity(2)">+</button>
        </div>
        <div class="total-price" id="total-price2">
            Rp 0
        </div>
    </div>

    <div class="product-row">
        <div class="product-info">
            <img src="gambar/kacanghijau.jpg" alt="Produk 3">
            <div class="product-details">
                <h4>Roti Kacang Hijau</h4>
                <p>Rp 35.000</p>
            </div>
        </div>
        <div class="quantity">
            <button onclick="decreaseQuantity(3)">-</button>
            <input type="text" value="0" id="quantity3">
            <button onclick="increaseQuantity(3)">+</button>
        </div>
        <div class="total-price" id="total-price3">
            Rp 0
        </div>
    </div>

    <!-- Tambahkan baris sesuai dengan jumlah produk dalam keranjang -->

</main>

<script>
    function increaseQuantity(productId) {
        var quantityInput = document.getElementById('quantity' + productId);
        var currentQuantity = parseInt(quantityInput.value);
        quantityInput.value = currentQuantity + 1;
        updateTotalPrice(productId);
    }

    function decreaseQuantity(productId) {
        var quantityInput = document.getElementById('quantity' + productId);
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
            updateTotalPrice(productId);
        }
    }

    function updateTotalPrice(productId) {
        var quantityInput = document.getElementById('quantity' + productId);
        var totalElement = document.getElementById('total-price' + productId); // Menggunakan ID produk untuk total harga
        var pricePerUnit = getProductPrice(productId);
        var currentQuantity = parseInt(quantityInput.value);
        var totalPrice = pricePerUnit * currentQuantity;
        totalElement.textContent = 'Rp ' + totalPrice;
    }

    function getProductPrice(productId) {
        // Ganti ini dengan logika untuk mendapatkan harga produk berdasarkan ID
        if (productId === 1) {
            return 40000;
        } else if (productId === 2) {
            return 45000;
        } else if (productId === 3) {
            return 35000;
        } else {
            return 0;
        }
    }
</script>


</body>
</html>
