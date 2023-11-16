<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shoe;

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
    return view('welcome');
});

Route::get('/shoes', function() {
    $shoes = Shoe::all();
    return view('index',compact('shoes'));
});

Route::get('/show/{id}', function($id) {
    $shoe = Shoe::find($id);
    return view('show', compact('shoe'));
});
