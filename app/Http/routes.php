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

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');

// normal
Route::get('/ok', ['roles' => ['User'], function () {
    return 'ok!';
}])->middleware('role');
Route::get('/a', ['middleware' => 'role' ,'roles'=>'Admin', function () {
    return 'Admin!';
}]);
Route::get('/u', ['middleware' => 'role' ,'roles'=>['User'], function () {
    return 'User!';
}]);

// group
Route::group(['middleware' => 'role' ,'roles'=>['User'] ], function() {
  Route::get('/q', function () {
      return 'QAQ';
  });
});
Route::group(['middleware' => 'grouprole' ,'roles'=>['User'] ], function() {
  Route::get('/qq', function () {
      return 'QAQ2';
  });
});
