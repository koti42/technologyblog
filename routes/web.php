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
//Route::get('/', function () {
//    return view('welcome');
//});


Route::namespace('Frontend')->group(function () {

    Route::get('/', 'DefaultController@index')->name('Frontend.home');
    Route::get('/contact', 'DefaultController@contact')->name('Frontend.contact');
    Route::post('/contact', 'DefaultController@sendMail');
    Route::get('/Haber-detay/{slug}', 'DetailController@index')->name('Frontend.detail-default');
    Route::get('/Haberler', 'DetailController@index1')->name('Frontend.category-list');





    route::get('/Inceleme','ReviewController@index')->name('Frontend.content.category');
    Route::get('inceleme/{slug}','deneme@index')->name('Detail');
    Route::post('inceleme/{id}','DefaultController@comments')->name('Names');

});
//FrontEnd Kısmı Ön Taraf
Route::namespace('Frontend')->group(function () {
   Route::resource('yorum_gonder','CommentsController');




});
//Yönetim Paneli
Route::namespace('Backend')->group(function () {
    Route::prefix('Yonetim')->group(function () {

        Route::get('/', 'DefaultController@index')->name('Backend.home');
        Route::delete('/haberler/delete/{id}', 'SettingsController@destroy')->name('company.destroy');
        Route::delete('/inceleme/delete/{id}', 'SettingsController@destroy2')->name('company2.destroy');
        Route::delete('/yorum_gonder/delete/{id}', 'SettingsController@destroy3')->name('company3.destroy');
        Route::post('/yorum_gonder/onay/{id}', 'SettingsController@approve')->name('approve.okey');



    });
});


Route::namespace('Backend')->group(function () {
    Route::prefix('Yonetim')->group(function () {
        Route::resource('haberler/sayfa', 'GameController');
        Route::resource('haberler', 'GameController');
        Route::resource('haber_ekle', 'GameController');
        Route::resource('haber_duzenle', 'GameController');
        //----------------------------------reviewController---------------------------------START------//
        Route::resource('inceleme/sayfa', 'ReviewController');
        Route::resource('inceleme', 'ReviewController');
        Route::resource('inceleme_ekle', 'ReviewController');
        Route::resource('inceleme_duzenle', 'ReviewController');
        //----------------------------------reviewController---------------------------------END-----//


        //----------------------------------CommentsController---------------------------------START------//
        Route::resource('yorum_onay','CommentsController');
        Route::resource('hepsini_onayla','CommentsController');

        //----------------------------------CommentsController---------------------------------END-----//

        //----------------------------------SocialMediaController---------------------------------START------//
        Route::resource('Sosyal-medya','SocialMediaController');
        Route::resource('Sosyalmedya_duzenle','SocialMediaController');
        //----------------------------------SocialMediaController---------------------------------END-----//


    });
});
