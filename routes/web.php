<?php

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route dasar (Basic)
Route::get('/tentang', function () {
    return '<h1>Halo</h1>'
        . '<h3>YIPEEEEEEEEEEEE</h3>'
        . 'selamat datang di webapp saya<br>'
        . 'Laravel, Emang keren.';
});

// buat root basic introduce yourself
Route::get('/introduce', function () {
    return '<h1>Let me introduce myself</h1>'
        . '<table>'
        . '<tr>'
        . '<td></td>'
        . '<td>Name: Rasya Razaqa Setiawan </td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>Age: 17</td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>Date/Place Born: 29 January 2007, Bandung</td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>Status: Student </td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>School: Assalaam Bandung High school </td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>Adress: Rancamanyar, Baleendah</td>'
        . '</tr>'
        . '<tr>'
        . '<td></td>'
        . '<td>Ambition: Make my Parents Happy</td>'
        . '</tr>';
});

// buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["Monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

// route parameter parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

// buat sebuah route dengan 3 buah paramater (Nama, Berat badan, tinggi badan)
Route::get('keterangan/{name}/{berat}/{tinggi}', function ($name, $berat, $tinggi) {
    $bmi = $berat / (($tinggi / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "Kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "Ideal";
    } elseif ($bmi < 18.5) {
        $ket = "Kekurangan Berat Badan";
    }
    return "<h1>Kalkulator bmi</h1>"
        . "Nama: $name <br>"
        . "Berat Badan: $berat Kg <br>"
        . "Tinggi Badan: $tinggi Cm <br>"
        . "Hasil BMI: $bmi <br>"
        . "Keterangan: <b>$ket</b><br>";
});

// Route Optional Paramater
Route::get('myname/{nama}', function ($a = "abdu") {
    return "My name is $a";
});

// Menampilkan data dari datbase dari laravel
Route::get('/testmodel', function () {
    $post = Post::all();
    return view("tampil_post", compact('post'));
});

// Menampilkan table barang
Route::get('/testbarang', function () {
    $barang = Barang::all();
    return view("tampil_barang", compact('barang'));
    // return $data;
});

// Menampilkan table siswa
Route::get('/testsiswa', function () {
    $siswa = Siswa::all();

// command untuk menampilkan tabel
    //$data::all();
    //$data::find(2);
    // $siswa = Siswa::where('jenis_kelamin', 'like', '%perempuan%')->get();
    // return $data;

    /* tambah table di routes
    $siswa = new Siswa;
    $siswa-> nama = "Teddy";
    $siswa-> jenis_kelamin = "Laki Laki";
    $siswa-> alamat = "Rancamanyar";
    $siswa-> agama = "Kristen";
    $siswa-> telepon = "081290198432";
    $siswa-> email = "Teddy@gmail.com";

    $siswa->save();
*/

    return view('tampil_siswa', compact('siswa'));
});

// Menampilkan table pengguna
Route::get('/testpengguna', function () {
    $pengguna = Pengguna::all();
    return view("tampil_pengguna", compact('pengguna'));
    // return $data;
});

// Menampilkan table telepon
Route::get('/telepon', function () {
    $telepon = Telepon::all();
    return view("tampil_telepon", compact('telepon'));
    // return $data;
});

// Menampilkan table telepon
Route::get('/produk', function () {
    $produk = Produk::all();
    return view("tampil_produk", compact('produk'));
    // return $data;
});

// menampilkan table transaksi
Route::get('/transaksi', function(){
    $transaksi = Transaksi::all();
    return view("tampil_transaksi", compact('transaksi'));
});

// belajar slicing laravel
Route::get('/template', function(){
    $post = Post::all();
    return view('template', compact('post'));
});

// belajar slicing laravel
Route::get('/template2', function(){
    $produk = Produk::all();
    return view('template2', compact('produk'));
});

// Laravel view
Route::get('/about', function () {
    return view('about');
    //App\Post::all();
    //App\Post::find(1);
});
