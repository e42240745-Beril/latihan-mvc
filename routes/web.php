<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/', function () { 
return "Hello World"; 
});    
Route::get('/', function () { 
return "Hello World"; 
}); 
Route::get('/user', function () { 
return "Hello User"; 
});      
// routes/web.php 
Route::get('/form-produk', function () { 
    return view('form-produk'); 
});
// routes/web.php 
use Illuminate\Http\Request; 
 
Route::post('/kirim-produk', function (Request $request) { 
    $nama = $request->input('nama'); 
    $harga = $request->input('harga'); 
    $kategori = $request->input('kategori'); 
 
    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b> 
termasuk kategori <b>$kategori</b> berhasil dikirim!"; 
});     
Route::get('/produk/edit', function () { 
    return view('edit-produk'); 
});    
Route::put('/produk/update', function (Request $request) { 
    $namaBaru = $request->input('nama'); 
    $hargaBaru = $request->input('harga'); 
    $kategoriBaru = $request->input('kategori'); 
 
    return "Data produk berhasil diperbarui menjadi:<br> 
            <b>Nama:</b> $namaBaru <br> 
            <b>Harga:</b> Rp$hargaBaru <br> 
            <b>Kategori:</b> $kategoriBaru"; 
});     
Route::get('/produk/edit-harga', function () { 
    return view('edit-harga'); 
}); 
Route::patch('/produk/update-harga', function (Request $request) { 
    $hargaBaru = $request->input('harga'); 
 
    return "Harga produk berhasil diperbarui menjadi <b>Rp$hargaBaru</b> 
(tanpa mengubah data lain)."; 
});   
Route::get('/edit-produk', function () {
    return view('edit-produk');
});

Route::put('/produk/update', function () {
    return "✅ Data produk berhasil diperbarui!";
});
Route::get('/edit-harga', function () {
    return view('edit-harga');
});

Route::patch('/produk/update-harga', function () {
    return "
        <h2>✅ Harga Berhasil Diperbarui!</h2>
        <table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; margin:auto;'>
            <tr style='background-color:#f8bbd0;'>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Baru</th>
            </tr>
            <tr>
                <td>Laptop ASUS</td>
                <td>Elektronik</td>
                <td><b>Rp5.500.000</b></td>
            </tr>
        </table>
        <br>
        <center><a href='/edit-harga'>← Kembali ke Form</a></center>
    ";
});
Route::get('/input-produk', function () {
    return view('input-produk');
});

Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = number_format($request->input('harga'), 0, ',', '.');
    $kategori = $request->input('kategori');

    return "
        <h2 style='text-align:center; color:#4a148c;'>✅ Data Produk Diterima</h2>
        <table border='1' cellpadding='8' cellspacing='0' style='margin:auto; border-collapse:collapse;'>
            <tr style='background-color:#f8bbd0;'>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Kategori</th>
            </tr>
            <tr>
                <td>$nama</td>
                <td>Rp$harga</td>
                <td>$kategori</td>
            </tr>
        </table>
        <br>
        <center><a href='/input-produk'>← Kembali ke Form</a></center>
    ";
});
