<?php

use Illuminate\Support\Facades\Route;

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

    $nome = "Calixto Nascimento";
    $idade = 25;

    $arr = [10,25,39,42,54];

    return view('welcome', 
    [
        'nome' => $nome,
        'idade2' => $idade,
        'profissao' => "Programador",
        'arr' => $arr
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});