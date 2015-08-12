<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


function getViewPath($name)
{
    return 'scripts.app.pages.' . $name . '.' . $name;
}

Route::get('/views/{name}', function ($name) {
    $view_path = getViewPath($name);
    if (View::exists($view_path)) {
        return View::make($view_path);
    }
    return App::abort(404);
});

Route::get('/', function () {
    return View::make('index');
});


Route::get('/deck/', ['as' => 'deck.new', 'uses' => 'DeckController@newDeck']);
Route::get('/deck/shuffled', ['as' => 'deck.new.shuffled', 'uses' => 'DeckController@shuffledDeck']);

Route::post('/deck/shuffle', ['as' => 'deck.shuffle', 'uses' => 'DeckController@shuffleDeck']);