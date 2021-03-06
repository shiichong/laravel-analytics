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

Route::get('/', 'AnalyticController@index');

Route::get('/analytics', 'Analytic\RealtimeController@test');
Route::get('/analytics/realtime', 'Analytic\RealtimeController@index');
Route::get('/analytics/page_views', 'Analytic\PageViewController@index');
