<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Showroom Mobil Sport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            /* ============================================
                INI SUDAH DIGANTI DENGAN GAMBAR F1 ANDA
                ============================================
            */
            background-image: url('/image/background.jpg');
            
            background-size: cover;       /* Gambar menutupi seluruh layar */
            background-position: center;  /* Gambar di tengah */
            background-attachment: fixed; /* Gambar tidak ikut scroll */
        }
        
        /* Ini untuk memberi lapisan gelap agar tulisan terbaca */
        .overlay {
            background-color: rgba(0, 0, 0, 0.7); /* Hitam transparan 70% */
            min-height: 100vh; /* Setidaknya setinggi layar */
        }
    </style>
</head>
<body class="text-white">

    <div class="overlay d-flex flex-column">

        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand fs-4" href="#">SHOWROOM MEWAH</a>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-danger">Login Admin</a>
                </div>
            </div>
        </nav>

        <div class="container d-flex flex-grow-1 justify-content-center align-items-center text-center">
            <div>
                <h1 class="display-3 fw-bold">Koleksi Mobil Sport Terbaik</h1>
                <p class="lead fs-4 mb-4">Temukan koleksi mobil mewah dan langka dari seluruh dunia.</p>
                <a href="{{ route('produk') }}" class="btn btn-danger btn-lg px-5 py-3">Lihat Koleksi</a>
            </div>
        </div>

    </div>

</body>
</html>