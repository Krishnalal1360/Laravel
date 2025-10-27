<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Routes

/*Route::get('/home', function(){
    return "Hello World!";
});*/

/*Route::get('/get-view', function(){
    return view('route.get-view');
});*/

/*Route::post('/post-view', function(){
    return view('route.post-view');
});*/

//Route::view('/get-view', 'route.get-view');

/*Route::get('/id/{id}/name/{name}', function(int $id, string $name){
    return "ID:$id and Name:$name";
});*/

/*Route::get('/{id?}/{name?}', function($id = null, $name = null) {
    if (is_numeric($id) && is_string($name)) {
        return "ID: $id and Name: $name";
    } elseif (is_numeric($id)) {
        return "ID: $id";
    } elseif (is_string($id)) {
        return "Name: $id";
    } else {
        return "No Parameters!";
    }
});*/

/*Route::get('/id/{id}', function(int $id){
    return "ID:$id";
})->whereNumber('id');

Route::get('/name/{name}', function(string $name){
    return "Name:$name";
})->whereAlpha('name');

Route::get('/card/{card}', function(string $card){
    return "Card:$card";
})->whereAlphaNumeric('card');

Route::get('/genre/{genre}', function(string $genre){
    return "Genre:$genre";
})->whereIn('genre', ['action', 'horror', 'suspense', 'romantic']);

Route::get('/digit/{digit}', function(string $digit){
    return "Digit:$digit";
})->where('digit', '[0-9]+');*/

//Route::view('/first_page', 'route.first_page')->name('first_page');

/*Route::get('/second_page', function(){
    return view('route.second_page');
})->name('second_page');*/

/*Route::prefix('page')->group(function(){
    Route::get('/first_page', function(){
        return view('route.first_page');
    })->name('page.first');
    Route::get('/second_page', function(){
        return view('route.second_page');
    })->name('page.second');
});*/

// Routes For View Blade Template

Route::prefix('blade')->group(function(){
    Route::get('/template1', function(){
        return view('blade.template1');
    })->name('blade.template1');
    Route::get('/template2', function(){
        return view('blade.template2');
    })->name('blade.template2');
});
