<?php

use App\Http\Livewire\WorkComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksController;

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

/*Route::get('/', function () { return view('pages.index'); });*/
Route::view('/', 'pages.index');
Route::view('/hosting/planes-hosting', 'pages.hosting');
Route::view('/paginas-web/wordpress-administrable', 'pages.website');
Route::view('/paginas-web/tienda-virtual-ecommerce', 'pages.ecommerce');
Route::view('/paginas-web/desarrollo-personalizado', 'pages.websiteCustom');
Route::view('/apps/progressive-web-apps', 'pages.pwa');
Route::view('/marketing-digital/google-ads', 'pages.google-ads');

Route::view('/cotizar-en-linea', 'pages.quote');

Route::view('/portafolio/proyectos', 'portfolio.index');
Route::get('/portafolio/proyectos/{id}', [WorksController::class, 'show']);


/*
https://lokalise.com/blog/laravel-localization-step-by-step/
Route::get('/{lang}', function ($lang) {
  App::setlocale($lang);
  return view('pages.index');
});*/
