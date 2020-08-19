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

Route::get('/', function () {
    return view('welcome');
});
/*****************************************
 * ------->[Login Routes]<-------
 *****************************************/



/**
 * login route 
 * 
 * */
Route::get('login','LoginController@Login')->name('login');


Route::get('dashboard/dashboard', function () {
    return view('dashboard');
});

Route::get('statistics', function () {
    return view('statistics');
});


/** accounts routes */
Route::get('accounts/pending', function () {
    return view('accounts/pending');
});

/** accounts routes */
Route::get('accounts/online', function () {
    return view('accounts/online');
});

/** accounts routes */
Route::get('accounts/approved', function () {
    return view('accounts/approved');
});



/**settings routes */
Route::get('settings/ad', function () {
    return view('settings/ad');
});

Route::get('settings/email', function () {
    return view('settings/email');
});

Route::get('settings/filter', function () {
    return view('settings/filter');
});

Route::get('settings/general', function () {
    return view('settings/general');
});

Route::get('settings/media', function () {
    return view('settings/media');
});

Route::get('settings/link', function () {
    return view('settings/link');
});

Route::get('settings/notification', function () {
    return view('settings/notification');
});

/** Payment route */

Route::get('payment', function () {
    return view('payment');
});

/****************************************** 
 * ------->[Subscription routes]<-------- 
 * ****************************************/

 /**
  * subscription/index
  */
Route::get('subscription/index','Admin\SubscriptionController@index')->name('subscription.index');

/**
  * subscription/add
  */
Route::get('subscription/add','Admin\SubscriptionController@create')->name('subscription.add');

/**
  * subscription/store
  */
  Route::post('subscription/store','Admin\SubscriptionController@store')->name('subscription.store');

  /**
  * subscription/show
  */
  Route::get('subscription/show/{subscription_id}','Admin\SubscriptionController@show')->name('subscription.show');

  /**
  * subscription/edit
  */
  Route::get('subscription/edit/{subscription_id}','Admin\SubscriptionController@edit')->name('subscription.edit');

  /**
  * subscription/update
  */
  Route::post('subscription/update/{subscription_id}','Admin\SubscriptionController@update')->name('subscription.update');

/**
  * subscription/delete
  */
  Route::get('subscription/delete/{subscription_id}','Admin\SubscriptionController@delete')->name('subscription.delete');


/** Gems routes */

Route::get('gem/add', function () {
    return view('gem/add');
});

Route::get('gem/edit', function () {
    return view('gem/edit');
});

Route::get('gem/index', function () {
    return view('gem/index');
});

/** Gift routes */

Route::get('gift/add', function () {
    return view('gift/add');
});

Route::get('gift/edit', function () {
    return view('gift/edit');
});

Route::get('gift/index', function () {
    return view('gift/index');
});

/** Slider routes */

Route::get('slider/add', function () {
    return view('slider/add');
});

Route::get('slider/edit', function () {
    return view('slider/edit');
});

Route::get('slider/index', function () {
    return view('slider/index');
});

/** Report routes */

Route::get('report/add', function () {
    return view('report/add');
});

Route::get('report/edit', function () {
    return view('report/edit');
});

Route::get('report/index', function () {
    return view('report/index');
});

/** Help routes */

Route::get('help/add', function () {
    return view('help/add');
});

Route::get('help/edit', function () {
    return view('help/edit');
});

Route::get('help/index', function () {
    return view('help/index');
});
// Auth::routes();
