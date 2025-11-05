<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            /* GANTI URL GAMBAR DI SINI */
            background-image: url('/image/background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <div class="overlay d-flex justify-content-center align-items-center vh-100">
        
        <div class="col-md-4">
            <div class="card bg-dark text-white shadow-lg" style="--bs-bg-opacity: .85;">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4">Admin Login</h2>

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger btn-lg">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('beranda') }}" class="text-white-50">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>