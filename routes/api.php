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
    Route::get('complementInfo/{id}', 'ParentController@complementInfo');
    Route::get('complementInfo/{id}', 'ParentController@complementInfo');
    Route::post('updateImageParent/{id}', 'ParentController@updateImageParent');
    Route::post('updateImageEnfant/{id}', 'ParentController@updateImageEnfant');
    Route::post('updateAll/{id}', 'ParentController@updateAll');
    Route::post('updateElev/{id}', 'ParentController@updateElev');

    Route::post('contact', 'ParentController@sendMessage');
    Route::post('suggestion', 'SuggestionController@createSuggestion');


});

Route::group(['namespace'=>'Api', 'middleware'=>'api', 'prefix'=>'task'], function(){
    Route::get('listEnf', 'TaskController@task');
    Route::get('listTask/{id}', 'TaskController@listTask');


});
Route::group(['namespace'=>'Api', 'middleware'=>'api', 'prefix'=>'convocation'], function(){
    Route::get('convocation', 'ConvocationController@convocation');
    Route::get('listConvocation/{id}', 'ConvocationController@listConvocation');
});

Route::group(['namespace'=>'Api', 'middleware'=>'api', 'prefix'=>'info'], function(){
    Route::get('info', 'InfoController@info');
    Route::get('listInfo/{id}', 'InfoController@listInfo');
});
Route::group(['namespace'=>'Api', 'middleware'=>'api', 'prefix'=>'emploi'], function(){
    Route::get('getEnfant', 'EmploiController@getEnfant');
    Route::get('getEmploibyStudent/{id}', 'EmploiController@getEmploibyStudent');
});


