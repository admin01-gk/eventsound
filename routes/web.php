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
    // -----------ALL ROUTES FRONTEND---------------
    Route::get('/', 'IndexController@index');
    // ---------------------------------------------
    Route::get('trangchu', 'FrontendController@getHome');
    
    Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');
    Route::post('detail/{id}/{slug}.html', 'FrontendController@postComment');
    
    
    Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

    Route::get('search', 'FrontendController@getSearch');
    // ---------CART ---------------//
    Route::group(['prefix' => 'cart'], function () {
        Route::get('add/{id}', 'CartController@getAddCart');
        Route::get('show','CartController@getShowCart' );
        Route::get('delete/{id}','CartController@getDeleteCart' );
        Route::get('update','CartController@getUpdateCart' );
        Route::post('show','CartController@postComplete' );  
    });
    Route::get('complete','CartController@getComplete' );
    // -----------------SEND MAIL----------//
   
    Route::post('sendmail','SendMailController@getSendMail');
   
//-------------BACKEND------------///

//-----------LOGIN---------------///
Route::group(['namespace' => 'Admin'], function () {
    //-----------LOGIN---------//
    Route::group(['prefix' => 'login','middleware'=>'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });
    //-----------------LOGOUT--------------//
    Route::get('logout', 'HomeController@getLogout');
    
    Route::group(['prefix' => 'admin','middleware'=>'CheckLogedOut'], function () {
        Route::get('home','HomeController@getHome');
         //------------ CATEGORY ----------------//
        Route::group(['prefix' => 'category'], function () {
          Route::get('/', 'CategoryController@getCate');
          Route::post('/', 'CategoryController@postCate');
            //---------------Edit/Delete Category---------//
          Route::get('edit/{id}', 'CategoryController@getEditCate');
          Route::post('edit/{id}','CategoryController@postEditCate');
          Route::get('delete/{id}', 'CategoryController@getDeleteCate');
        });
        //--------------ADD/EDIT/DELETE PRODUCT----------------//
          Route::group(['prefix' => 'product'], function () {
              
          Route::get('/', 'ProductController@getProduct');
          
          Route::get('add', 'ProductController@getAddProduct');
          Route::post('/add', 'ProductController@postAddProduct');
            //---------------Edit/Delete Category---------//
          Route::get('edit/{id}', 'ProductController@getEditProduct');
          Route::post('edit/{id}','ProductController@postEditProduct');
          Route::get('delete/{id}', 'ProductController@getDeleteProduct');
        });



        
    });
    
    
});