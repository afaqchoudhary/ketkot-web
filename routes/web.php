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
Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('statistics', function () {
    return view('statistics');
});

Route::get('accounts/pending', function () {
    return view('accounts/pending');
});

Route::get('accounts/approved', function () {
    return view('accounts/approved');
});

Route::get('accounts/online', function () {
    return view('accounts/online');
});

Route::get('accounts/show', function () {
    return view('accounts/show');
});

/*************************************
 *  ------>[accounts routes]<--------
 * ***********************************/

/**
 *
 *  account/pending
 */
Route::get('account/pending', 'Admin\AccountController@pendingAccounts')->name('pending.accounts');

/**
 * [ account/isBlock ]
 */
Route::get('account/isBlock', 'Admin\AccountController@isBlocked');

/**
 *
 *  account/show
 */
Route::get('account/show/{id}', 'Admin\AccountController@show')->name('show.accounts');

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
Route::get('subscription/index', 'Admin\SubscriptionController@index')->name('subscription.index');

/**
 * subscription/add
 */
Route::get('subscription/add', 'Admin\SubscriptionController@create')->name('subscription.add');

/**
 * subscription/store
 */
Route::post('subscription/store', 'Admin\SubscriptionController@store')->name('subscription.store');

/**
 * subscription/show
 */
Route::get('subscription/show/{subscription_id}', 'Admin\SubscriptionController@show')->name('subscription.show');

/**
 * subscription/edit
 */
Route::get('subscription/edit/{subscription_id}', 'Admin\SubscriptionController@edit')->name('subscription.edit');

/**
 * subscription/update
 */
Route::post('subscription/update/{subscription_id}', 'Admin\SubscriptionController@update')->name('subscription.update');

/**
 * subscription/delete
 */
Route::get('subscription/delete/{subscription_id}', 'Admin\SubscriptionController@delete')->name('subscription.delete');

/******************************************
 * ------->[Gem routes]<--------
 * ****************************************/

/**
 *
 * gem/index
 */
Route::get('gem/index', 'Admin\GemController@index')->name('gem.index');

/**
 *
 * gem/add
 */
Route::get('gem/add', 'Admin\GemController@create')->name('gem.add');

/**
 *
 * gem/store
 */
Route::post('gem/store', 'Admin\GemController@store')->name('gem.store');

/**
 *
 * gem/edit
 */
Route::get('gem/edit/{gem_id}', 'Admin\GemController@edit')->name('gem.edit');

/**
 *
 * gem/update
 */
Route::post('gem/update/{gem_id}', 'Admin\GemController@update')->name('gem.update');

/**
 *
 * gem/update/icon
 */
Route::post('gem/update/icon/{gem_id}', 'Admin\GemController@updateGemIcon')->name('gemicon.update');

/**
 *
 * gem/delete
 */
Route::get('gem/delete/{gem_id}', 'Admin\GemController@destroy')->name('gem.delete');

/******************************************
 * ------->[Gem routes]<--------
 * ****************************************/

/**
 *
 * gift/index
 */
Route::get('gift/index', 'Admin\GiftController@index')->name('gift.index');

/**
 *
 * gift/add
 */
Route::get('gift/add', 'Admin\GiftController@create')->name('gift.add');

/**
 *
 * gift/store
 */
Route::post('gift/store', 'Admin\GiftController@store')->name('gift.store');

/**
 *
 * gift/edit
 */
Route::get('gift/edit/{gift_id}', 'Admin\GiftController@edit')->name('gift.edit');

/**
 *
 * gift/update
 */
Route::post('gift/update/{gift_id}', 'Admin\GiftController@update')->name('gift.update');

/**
 *
 * gift/update/icon
 */
Route::post('gift/update/icon/{gift_id}', 'Admin\GiftController@updateGiftIcon')->name('gifticon.update');

/**
 *
 * gift/delete
 */
Route::get('gift/delete/{gift_id}', 'Admin\GemController@destroy')->name('gift.delete');

/******************************************
 * ------->[Slider routes]<--------
 * ****************************************/

/**
 * slider/index
 */
Route::get('slider/index', 'Admin\SliderController@index')->name('slider.index');

/**
 * slider/add
 */
Route::get('slider/add', 'Admin\SliderController@create')->name('slider.add');

/**
 * slider/store
 */
Route::post('slider/store', 'Admin\SliderController@store')->name('slider.store');

/**
 * slider/show
 */
Route::get('slider/show/{slider_id}', 'Admin\SliderController@show')->name('slider.show');

/**
 * slider/edit
 */
Route::get('slider/edit/{slider_id}', 'Admin\SliderController@edit')->name('slider.edit');

/**
 * slider/update
 */
Route::post('slider/update/{slider_id}', 'Admin\SliderController@update')->name('slider.update');

/**
 * slider/update
 */
Route::post('slider/update/image/{slider_id}', 'Admin\SliderController@updateSliderImage')->name('sliderImage.update');

/**
 * subscription/delete
 */
Route::get('slider/delete/{slider_id}', 'Admin\SliderController@destroy')->name('slider.delete');

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

/******************************************
 * ------->[Help routes]<--------
 * ****************************************/

/**
 * help/index
 */
Route::get('help/index', 'Admin\HelpController@index')->name('help.index');

/**
 * help/add
 */
Route::get('help/add', 'Admin\HelpController@create')->name('help.add');

/**
 * help/store
 */
Route::post('help/store', 'Admin\HelpController@store')->name('help.store');

/**
 * help/show
 */
Route::get('help/show/{help_info_id}', 'Admin\HelpController@show')->name('help.show');

/**
 * help/edit
 */
Route::get('help/edit/{help_info_id}', 'Admin\HelpController@edit')->name('help.edit');

/**
 * help/update
 */
Route::post('help/update/{help_info_id}', 'Admin\HelpController@update')->name('help.update');