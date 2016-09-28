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
use Illuminate\Http\Request;

Route::get('/hello/{name?}/{age?}', function ($name = 'World', $age = 0){
    return '<h1>Hello '.$name.'!</h1> <h2>Age '.$age.'</h2>';
});//->where(['age' => '[0-9]+', 'name' => '[a-zA-Z]+']);

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function (){
    Route::get('/', function (){
       return '<h1>Profile Index</h1>';
    });
    Route::get('/settings', function (){
        return '<h1>Profile Settings</h1>';
    });
});

Route::get('/test-age', ['middleware' => 'age', function (Request $request){
    $age = $request->input('age');
    return "<h1>Age: $age</h1>";
}]);

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'posts'], function (){
    Route::get('/', 'PostController@index');
    Route::get('/{id}', 'PostController@post');
});

Route::group(['prefix' => 'rating'], function (){
    Route::post('/plus', 'PostController@ratingPlus');
    Route::post('/minus', 'PostController@ratingMinus');
});
