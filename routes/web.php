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
|Route::post('/add_data', 'add_data@add');
*/
// tampilan view
Route::get('/', function () {
    return view('index');
});
Route::get('/add-data', function () {
    return view('add-data');
});
Route::get('/maps', function () {
    return view('maps');
});

// operasi
Route::post('/post_data', 'report@add');
Route::get('/edit-delete', 'report@edit_delete');
Route::get('/data-history', 'report@history');
Route::get('/{show}/edit', 'report@edit_form');
Route::post('/proses', 'report@proses_edit');
Route::get('/{id}/deleteid','report@delete');
