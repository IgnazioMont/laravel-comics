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
    $comics = config('comics');
    /* DEBUG
    dd($comics);
    */
    
    /* Creiamo l'array associativo */
    $comics_array = [
        'comics' => $comics
    ];

    return view('home', $comics_array);
})->name("home");



/* Prendiamo anche l'id del singolo elemento */
Route::get('/comic/{id}', function($id) {
    $comics_array = config('comics');
    
    $single_comic = [];
    foreach($comics_array as $comic) {
        //  Se c'è, "single_comic" diventa l'array con "id" uguale a quello dell'URL
        if($comic['id'] === (int)$id) {
            $single_comic = $comic;
        }
    }
    //  Se è vuoto, errore 404
    if(empty($single_comic)) {
        abort('404');
    }

    $data = [
        'single_comic' => $single_comic
    ];

    return view('pages.page', $data);
})->name('comic');