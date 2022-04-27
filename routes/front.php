<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});
Auth::routes(['verify' => true]);


Route::group(['namespace'=>'Front'],function(){
    Route::get('getLogin','LoginController@getLogin')->name('getLogin');
    Route::post('login', 'LoginController@login')->name('login');

    Route::get('getRegister','RegisterController@getRegister')->name('getRegister');
    Route::post('inscrire', 'RegisterController@register')->name('inscrire');

    Route::get('forgotPass', 'ForgotPassController@forgotPass')->name('forgotPass');
    Route::post('sendResetLinkEmail', 'ForgotPassController@sendResetLinkEmail')->name('sendResetLinkEmail');
    Route::get('resetPass/{token}', 'ForgotPassController@resetPass')->name('resetPass');
    Route::post('resetPass', 'ForgotPassController@submitResetPasswordForm')->name('submitResetPasswordForm');


});
Route::group(['namespace'=>'Front'],function(){
    Route::get('Home', 'ParentController@index')->name('Home');
    Route::get('mainScreen','ParentController@mainScreen')->name('mainScreen');
    Route::get('contact', 'ParentController@contact')->name('contact');
    Route::post('sendMessage','ParentController@sendMessage')->name('sendMessage');
    Route::get('apropos', 'ParentController@apropos')->name('apropos');
    Route::get('profile', 'ParentController@profile')->name('profile');
    Route::post('updateImageParent/{id}', 'ParentController@updateImageParent')->name('updateImageParent');
    Route::post('updateImageEnfant/{id}', 'ParentController@updateImageEnfant')->name('updateImageEnfant');
    Route::get('ComplementInfo', 'ParentController@ComplementInfo')->name('ComplementInfo');
    Route::post('updateAll/{id}', 'ParentController@updateAll')->name('updateAll');
    Route::post('updateElev/{id}', 'ParentController@updateElev')->name('updateElev');

    Route::get('task', 'TravailController@task')->name('task');
    Route::get('listTask/{id}', 'TravailController@listTask')->name('listTask');
    Route::post('logout', 'ParentController@logout')->name('logoute');
    Route::get('menuds', 'MenuController@list')->name('menuds');
    Route::get('suggestion', 'SuggestionController@suggestion')->name('suggestion');
    Route::post('createSuggestion', 'SuggestionController@createSuggestion')->name('createSuggestion');

    Route::get('noteInfo', 'InfoController@info')->name('noteInfo');
    Route::get('listInfo/{id}', 'InfoController@listInfo')->name('listInfo');

    Route::get('convocation', 'ConvocationController@convocation')->name('convocation');
    Route::get('listConvocation/{id}', 'ConvocationController@listConvocation')->name('listConvocation');






    Route::get('enfants' , 'ParentController@list')->name('enfants');

});
