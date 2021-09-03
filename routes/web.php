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
    $data = [
        'links' => [
            'laravel',
            'symfony',
            'aura',
            'cakephp',
            'codeigniter',
            'phalcon-framework',
            'yii-framework',
        ]
    ];
    return view('home', $data);
})->name('homepage');

// Route::get('/', function () {
//     return view('home');
// })->name('homepage');

Route::get('/laravel', function () {
    return view('laravel');
})->name('laravel');

Route::get('/symfony', function () {
    return view('symfony');
})->name('symfony');

Route::get('/aura', function () {
    return view('aura');
})->name('aura');

Route::get('/cakephp', function () {
    return view('cakephp');
})->name('cakephp');

Route::get('/codeigniter', function () {
    return view('codeigniter');
})->name('codeigniter');

Route::get('/phalcon-framework', function () {
    return view('phalcon-framework');
})->name('phalcon-framework');

Route::get('/yii-framework', function () {
    return view('yii-framework');
})->name('yii-framework');