<?php

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

use Simplexi\Greetr\Greetr;

Route::get('/greet/{name}', function ($name) {
    $oGreetr = new Greetr();
    return $oGreetr->greet($name);
});
