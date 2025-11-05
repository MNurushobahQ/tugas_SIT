<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa; /* Memberi background abu-abu muda */
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Menambah bayangan di navbar */
        }

        /* Ini adalah kartu putih pembungkus konten */
        .product-card {
            background-color: #ffffff;
            border-radius: 15px; /* Sudut lebih tumpul */
            padding: 35px; /* Jarak di dalam kartu */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Bayangan lebih halus */
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Mengatur gambar agar terlihat pas */
        .product-image img {
            border-radius: 10px; /* Sudut tumpul juga untuk gambar */
            max-width: 100%; /* Tetap responsif */
        }

        /* Mengatur area info teks */
        .product-info h2 {
            font-weight: 700; /* Judul lebih tebal */
            margin-bottom: 15px;
        }

        .product-info .h4 {
            font-size: 2.25rem; /* Harga lebih besar */
            font-weight: 600; /* Harga lebih tebal */
            margin-bottom: 20px;
        }

        .product-info p {
            font-size: 1.1rem; /* Deskripsi sedikit lebih besar */
            line-height: 1.6;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee; /* Garis pemisah */
        }
        
        /* Mengatur tombol */
        .product-actions .btn {
            padding: 12px 20px; /* Tombol lebih besar */
            font-size: 1.1rem;
            font-weight: 500;
        }
    </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('produk') }}">Sistem Penjualan</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <div class="product-card">
            <div class="row">
                <div class="col-md-5 product-image text-center">
                    <img src="{{ asset('image/' . $detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid shadow-sm">
                </div>
                
                <div class="col-md-7 product-info">
                    <h2>{{ $detail['nama'] }}</h2>
                    
                    <h4 class="text-success h4">Rp {{ number_format($detail['harga'], 0, ',', '.') }}</h4>
                    
                    <p>{{ $detail['deskripsi'] }}</p>
                    
                    <div class="mt-4 product-actions">
                        <div class="d-grid gap-2">
                            <button class="btn btn-dark btn-lg">Konfirmasi Pembelian</button>
                            <a href="{{ route('produk') }}" class="btn btn-outline-secondary">Kembali ke Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>