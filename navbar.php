<!-- navbar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Ikon SVG</title>

    <!-- Sertakan Bootstrap CSS di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<style>
    body {
        background-color: #000; /* Warna hitam */
        color: #fff; /* Warna teks putih agar kontras */
        margin: 0; /* Hapus margin bawaan browser */
        font-family: Arial, sans-serif; /* Pilih font yang sesuai */
    }

    nav {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #FFA500; /* Warna oranye */
        padding: 10px;
        box-sizing: border-box;
        max-width: 400px;
        z-index: 1000;
    }

    .navbar-list {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .navbar-list li {
        padding: 0;
    }

    .navbar-list a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar-list a svg {
        margin-right: 5px; /* Ruang antara ikon dan teks */
    }

    .navbar-list a:hover {
        background-color: #555;
    }
</style>

<nav>
    <ul class="navbar-list">
        <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 34 29" fill="none"><path d="M11.9099 26.6465V22.4214C11.9099 21.3429 13.0364 20.4686 14.426 20.4686H19.5056C20.1729 20.4686 20.8129 20.6743 21.2847 21.0406C21.7566 21.4068 22.0217 21.9035 22.0217 22.4214V26.6465C22.0174 27.0949 22.244 27.5261 22.651 27.8443C23.058 28.1625 23.6119 28.3415 24.1896 28.3415H27.6551C29.2737 28.3447 30.8273 27.848 31.9733 26.9608C33.1193 26.0737 33.7633 24.8691 33.7633 23.6128V11.5763C33.7633 10.5615 33.1837 9.59892 32.1809 8.94786L20.3917 1.63995C18.341 0.358624 15.4027 0.399995 13.4132 1.73821L1.89311 8.94786C0.842837 9.57973 0.215103 10.5451 0.184082 11.5763V23.6005C0.184082 26.2189 2.91881 28.3415 6.29227 28.3415H9.67868C10.8786 28.3415 11.8537 27.5901 11.8624 26.6588L11.9099 26.6465Z" fill="black"/></svg> </a></li>
        <li><a href="keranjang.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 34 29" fill="none"><path d="M25.4485 21.432H28.1905V28.3408H6.25451V21.432H8.99651V23.7349H25.4485V21.432ZM33.5264 15.9557C33.6114 16.2366 33.6745 16.5245 33.6745 16.8262C33.6745 17.2798 33.5681 17.729 33.3614 18.1481C33.1547 18.5672 32.8518 18.948 32.4698 19.2688C32.0879 19.5896 31.6345 19.844 31.1355 20.0176C30.6365 20.1912 30.1016 20.2806 29.5615 20.2806C29.0214 20.2806 28.4865 20.1912 27.9875 20.0176C27.4885 19.844 27.0351 19.5896 26.6532 19.2688C26.2712 18.948 25.9683 18.5672 25.7616 18.1481C25.5549 17.729 25.4485 17.2798 25.4485 16.8262C25.4485 17.7423 25.0152 18.621 24.2438 19.2688C23.4725 19.9166 22.4263 20.2806 21.3355 20.2806C20.2447 20.2806 19.1985 19.9166 18.4272 19.2688C17.6558 18.621 17.2225 17.7423 17.2225 16.8262C17.2225 17.7423 16.7892 18.621 16.0178 19.2688C15.2465 19.9166 14.2003 20.2806 13.1095 20.2806C12.0187 20.2806 10.9725 19.9166 10.2012 19.2688C9.42984 18.621 8.99651 17.7423 8.99651 16.8262C8.99651 17.2798 8.89012 17.729 8.68342 18.1481C8.47673 18.5672 8.17377 18.948 7.79184 19.2688C7.40991 19.5896 6.9565 19.844 6.45748 20.0176C5.95847 20.1912 5.42363 20.2806 4.88351 20.2806C4.34338 20.2806 3.80854 20.1912 3.30953 20.0176C2.81052 19.844 2.35711 19.5896 1.97518 19.2688C1.59325 18.948 1.29029 18.5672 1.08359 18.1481C0.876894 17.729 0.770508 17.2798 0.770508 16.8262C0.770508 16.5245 0.830832 16.2366 0.915834 15.9557L3.51251 0.705688H30.9325L33.5264 15.9557Z" fill="black"/></svg> </a></li>
        <li><a href="detail_pesanan.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 33 29" fill="none"><path d="M23.889 0.729187C29.3483 0.729187 32.3881 3.18871 32.3881 7.40305V21.6766C32.3881 25.96 29.3483 28.3642 23.889 28.3642H9.07702C3.70434 28.3642 0.576172 25.96 0.576172 21.6766V7.40305C0.576172 3.18871 3.70434 0.729187 9.07702 0.729187H23.889ZM9.5542 19.7145C9.024 19.673 8.51147 19.8665 8.2287 20.2257C7.94593 20.5712 7.94593 21.0271 8.2287 21.3864C8.51147 21.7318 9.024 21.9391 9.5542 21.8838H23.41C24.1152 21.8286 24.6472 21.3574 24.6472 20.8061C24.6472 20.2395 24.1152 19.7697 23.41 19.7145H9.5542ZM23.41 13.4123H9.5542C8.79248 13.4123 8.17568 13.8973 8.17568 14.4914C8.17568 15.0856 8.79248 15.5692 9.5542 15.5692H23.41C24.17 15.5692 24.7886 15.0856 24.7886 14.4914C24.7886 13.8973 24.17 13.4123 23.41 13.4123ZM14.8367 7.15434H9.5542V7.16815C8.79248 7.16815 8.17568 7.65177 8.17568 8.24592C8.17568 8.84007 8.79248 9.32369 9.5542 9.32369H14.8367C15.5985 9.32369 16.217 8.84007 16.217 8.23072C16.217 7.63795 15.5985 7.15434 14.8367 7.15434Z" fill="black"/></svg> </a></li>
        <li class="ml-auto"><a href="profil.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29 29" fill="none"><path d="M14.6132 18.9088C22.281 18.9088 28.7519 19.883 28.7519 23.6414C28.7519 27.4012 22.2386 28.3408 14.6132 28.3408C6.94722 28.3408 0.474609 27.3667 0.474609 23.6082C0.474609 19.8484 6.98789 18.9088 14.6132 18.9088ZM14.6132 0.705688C19.8076 0.705688 23.9694 3.95837 23.9694 8.01663C23.9694 12.0749 19.8076 15.329 14.6132 15.329C9.42064 15.329 5.25702 12.0749 5.25702 8.01663C5.25702 3.95837 9.42064 0.705688 14.6132 0.705688Z" fill="black"/></svg> </a></li>
    </ul>
</nav>

<!-- Sertakan Bootstrap JS di sini -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
