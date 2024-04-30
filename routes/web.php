<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
Route::get('/about', function () {
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
// Done Coy

// Route Optional Paramater
Route::get('myname/{nama}', function ($a = "abdu") {
    return "My name is $a";
});

// Menampilkan data dari datbase dari laravel
Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

// Menampilkan table barang
Route::get('/testbarang', function () {
    $data = Barang::all();
    return $data;
});
