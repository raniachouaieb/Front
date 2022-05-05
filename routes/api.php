<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group([ 'namespace'=>'Api','middleware'=>'api', 'prefix'=>'auth'], function(){
   Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('sendPasswordResetLink', 'PasswordResetRequestController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@passwordResetProcess');




});
Route::group([ 'namespace'=>'Api','middleware'=>'api', 'prefix'=>'menu'], function(){
    Route::get('menuds', 'MenuController@list');
    Route::get('profile', 'ParentController@profile');
});
Route::group([ 'namespace'=>'Api','middleware'=>'api', 'prefix'=>'user'], function(){
    Route::get('profile/{id}', 'ParentController@profile');
    Route::post('contact', 'ParentController@sendMessage');
    Route::post('suggestion', 'SuggestionController@createSuggestion');


});



