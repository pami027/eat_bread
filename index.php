<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #000000;
            text-align: left;
            padding: 20px;
        }

        main {
            text-align: center;
            padding: 20px;
        }

        .product-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .product {
            flex: 0 1 calc(33.33% - 20px);
            margin-bottom: 20px;
            text-align: center;
            position: relative;
        }

        .product img {
            width: 100%;
            max-width: 450px;
            height: 300px;
            border-radius: 8px;
        }

        .product .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.9); /* Warna latar belakang dengan opacity */
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product:hover .overlay {
            opacity: 1;
        }

        .product h3,
        .product p {
            margin: 10px;
            color: #333;
        }

        .slogan {
            font-size: 70px;
            font-weight: bold;
            color: white;
        }

        .slogan1 {
            font-size: 50px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <br>
    <br>
    <h1 class="slogan">Cari Roti</h1>
    <h2 class="slogan1">Pilihanmu !!!</h2>
</header>

<?php include 'navbar.php'; ?>

<main>
    <div class="product-container">
        <div class="product">
            <img src="gambar/pastry.jpg" alt="Roti 1">
            <div class="overlay">
                <h3>Roti Pastry</h3>
                <p>Terbuat dari tepung, air, lemak. Rasanya yang manis dan gurih. Lemak yang berasal dari mentega, lemak nabati, dan hewani.</p>
            </div>
        </div>

        <div class="product">
            <img src="gambar/abonsapi.jpg" alt="Roti 2">
            <div class="overlay">
                <h3>Roti Abon Sapi</h3>
                <p>Yang dibuat dengan adonan Premium Quality dengan abon sapi spesial yang ditaburkan di atas roti.</p>
            </div>
        </div>

        <div class="product">
            <img src="gambar/kacanghijau.jpg" alt="Roti 3">
            <div class="overlay">
                <h3>Roti Kacang Hijau Pandan</h3>
                <p>Terbuat dari adonan kacang hijau yang diolah menjadi pasta dicampur dengan pandan yang memberikan aroma khas.</p>
            </div>
        </div>
    </div>
</main>

</body>
</html>
