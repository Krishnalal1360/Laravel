<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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

/*Route::prefix('blade')->group(function(){
    Route::get('/template1', function(){
        return view('blade.template1');
    })->name('blade.template1');
    Route::get('/template2', function(){
        return view('blade.template2');
    })->name('blade.template2');
    Route::get('/template3', function(){
        return view('blade.template3');
    })->name('blade.template3');
    Route::get('/template4', function(){
        return view('blade.template4');
    })->name('blade.template4');
    Route::get('/template5', function(){
        return view('blade.template5');
    })->name('blade.template5');
    Route::get('/template6', function(){
        return view('blade.template6');
    })->name('blade.template6');
    Route::get('/template7', function(){
        //$names = ['Alice', 'Bob', 'Charlie', 'Diana', 'Ethan'];
        //$alert = "<script>alert('This is an alert from Blade Template 7');</script>";
        //$name = '';
        //$name = null;
        $name = 'Laravel User';
        //abort_if(empty($name), 404);
        abort_unless(isset($name), 404);
        $message = 'Welcome to Laravel Blade Templates!';
        return view('blade.template7'/*, ['names'=>$names], compact('alert')*//*)
        /*->with('name', $name)
        ->with('message', $message);
        ->with(compact('name', 'message'));
        ->withName($name)
        ->withMessage($message);*/
        /*->with('name', $name)
        ->with('message', $message);
    })->name('blade.template7');
});*/

// Routes For Controllers

//Route::get('/blade/template1', [TestController::class, 'template1'])->name('blade.template1');

/*Route::controller(TestController::class)->group(function(){
    Route::get('/blade/template1', 'template1')->name('blade.template1');
    Route::get('/blade/template2', 'template2')->name('blade.template2');
    Route::get('/blade/template3', 'template3')->name('blade.template3');
    Route::get('/blade/template4', 'template4')->name('blade.template4');
    Route::get('/blade/template5', 'template5')->name('blade.template5');
    //
    Route::get('/blade/template8/{name}/{role}', 'template8')->name('blade.template8');
});*/

//Route::get('/blade/template8', UserController::class )->name('blade.template8');

/*Route::controller(UserController::class)->group(function(){
    Route::get('/blade/template8', '__invoke')->name('blade.template8');
    Route::get('/blade/template8/{name}/{role}', 'template8')->name('blade.template8.withparams');
});*/