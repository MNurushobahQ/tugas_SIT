<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk Kami - Rolls Royce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm">
        <div class="container">
            <a class="navbar-brand fs-4" href="{{ route('beranda') }}">SHOWROOM MEWAH</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-5 display-5 fw-bold">Koleksi Rolls-Royce</h2>

        <div class="row justify-content-center g-4">
            
            @foreach($produk as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card bg-black text-light border border-secondary h-100 shadow-lg">
                    <img src="{{ asset('image/' . $item['foto']) }}" 
                         class="card-img-top" 
                         alt="{{ $item['nama'] }}" 
                         style="height: 220px; object-fit: cover;">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fs-4">{{ $item['nama'] }}</h5>
                        
                        @if(isset($item['harga']))
                            <p class="card-text fs-5 text-danger fw-bold mb-3">
                                Rp {{ number_format( (int)str_replace('.', '', $item['harga']), 0, ',', '.') }}
                            </p>
                        @endif

                        <div class="mt-auto">
                            <a href="{{ route('produk.detail', ['id' => $item['id']]) }}" class="btn btn-danger w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        </div>

    <footer class="text-center text-white-50 mt-5 p-4">
        Copyright &copy; 2025 Showroom Mewah
    </footer>

</body>
</html>