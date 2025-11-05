<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
    if ($username === 'admin' && $password === '12345') {
        return redirect()->route('produk');
    } else {
        return back()->with('error', 'Username atau Password salah!');
    }
})->name('login.process');

// ==========================================================
// Halaman Produk Penjualan (SUDAH DIPERBARUI)
// ==========================================================
Route::get('/produk', function () {
    $produk = [
        [
            'id' => 1,
            'nama' => 'Rolls-Royce Ghost (Biru)',
            'harga' => '8500000000',           // 8.5 Miliar
            'foto' => 'mobil1.jpg',            // Pastikan Anda punya file ini
            'deskripsi' => 'Sedan mewah modern dengan kenyamanan tak tertandingi.'
        ],
        [
            'id' => 2,
            'nama' => 'Rolls-Royce Phantom Goldfinger',
            'harga' => '15000000000',          // 15 Miliar
            'foto' => 'mobil2.jpg',            // Pastikan Anda punya file ini
            'deskripsi' => 'Edisi kustom langka, penghormatan untuk film James Bond.'
        ],
        [
            'id' => 3,
            'nama' => 'Rolls-Royce Phantom Klasik (Ungu)',
            'harga' => '11200000000',          // 11.2 Miliar
            'foto' => 'mobil3.jpg',            // Pastikan Anda punya file ini
            'deskripsi' => 'Keanggunan klasik dari era 1930-an.'
        ],
        [
            'id' => 4,
            'nama' => 'Rolls-Royce Ghost (Silver)',
            'harga' => '8700000000',           // 8.7 Miliar
            'foto' => 'mobil4.jpg',            // Pastikan Anda punya file ini
            'deskripsi' => 'Desain modern Ghost dengan warna perak yang elegan.'
        ],
        [
            'id' => 5,
            'nama' => 'Rolls-Royce Ghost FAB1 (Pink)',
            'harga' => '9500000000',           // 9.5 Miliar
            'foto' => 'mobil5.jpg',            // Pastikan Anda punya file ini
            'deskripsi' => 'Mobil unik untuk amal, tampil beda dengan warna pink.'
        ],
    ];
    return view('produk', compact('produk'));
})->name('produk');

// ==========================================================
// Halaman Detail Pembelian (SUDAH DIPERBARUI)
// ==========================================================
Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => [
            'nama' => 'Rolls-Royce Ghost (Biru)',
            'harga' => '8500000000',
            'foto' => 'mobil1.jpg',
            'deskripsi' => 'Sedan mewah modern dengan kenyamanan tak tertandingi.'
        ],
        2 => [
            'nama' => 'Rolls-Royce Phantom Goldfinger',
            'harga' => '15000000000',
            'foto' => 'mobil2.jpg',
            'deskripsi' => 'Edisi kustom langka, penghormatan untuk film James Bond.'
        ],
        3 => [
            'nama' => 'Rolls-Royce Phantom Klasik (Ungu)',
            'harga' => '11200000000',
            'foto' => 'mobil3.jpg',
            'deskripsi' => 'Keanggunan klasik dari era 1930-an.'
        ],
        4 => [
            'nama' => 'Rolls-Royce Ghost (Silver)',
            'harga' => '8700000000',
            'foto' => 'mobil4.jpg',
            'deskripsi' => 'Desain modern Ghost dengan warna perak yang elegan.'
        ],
        5 => [
            'nama' => 'Rolls-Royce Ghost FAB1 (Pink)',
            'harga' => '9500000000',
            'foto' => 'mobil5.jpg',
            'deskripsi' => 'Mobil unik untuk amal, tampil beda dengan warna pink.'
        ],
    ];
    
    // Pastikan ID valid
    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }
    $detail = $produk[$id];
    return view('detail', compact('detail'));
})->name('produk.detail');

// Logout
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');