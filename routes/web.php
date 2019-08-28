<?php

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
    return view('home');
});

Route::view('/products', 'products.index');
Route::view('/products/electronic-modules', 'products.electronic-modules');
Route::view('/products/wire-harness-assemblies', 'products.wire-harness-assemblies');
Route::view('/products/instrument-clusters', 'products.instrument-clusters');
Route::view('/products/graphic-overlays', 'products.graphic-overlays');
Route::view('/products/coil-bobbin-assemblies', 'products.coil-bobbin-assemblies');

Route::view('/industries', 'industries.index');

Route::view('/technology', 'technology.index');
Route::view('/technology/advanced-engineering', 'technology.advanced-engineering');
Route::view('/technology/manufacturing', 'technology.manufacturing');
Route::view('/technology/cloud-based-solutions', 'technology.cloud-based-solutions');

Route::view('/contact', 'contact.index');

Route::view('/about', 'about.index');
