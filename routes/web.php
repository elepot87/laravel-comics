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

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// News
Route::get('/news', function () {
    return view('news');
})->name('news');

// Comics
Route::get('/comics', function () {
    // prodotti
    $comics = config('product-data');
    // dump($comics);
    // pagina
    return view('comics', [
        'comics' => $comics,
    ]);
})->name('comics');

// Comic detail
Route::get('/comic/{id}', function($id) {
    $comics = config('product-data');
    // dump($comics, $id);
    // Check id
    if(is_numeric($id) && $id >= 0 && $id < count($comics) ) {    
        $comic = $comics[$id];
        dump($comic);
    } else {
        abort(404);
    }

    return view('comic-detail', [
        'comic' => $comic,
    ]);
});

  