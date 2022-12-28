<?php

use App\Http\Controllers\Rtd;
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
    return view('layouts.master');
});

Route::controller(Rtd::class)->group(function () {
    Route::get('/rtd/index', 'index');
    Route::get('/rtd/add', 'add');
    Route::post('/rtd/save', 'save');
    Route::post('/rtd/import', 'import')->name('master.import');
    Route::get('/rtd/export', 'export')->name('master.export');
});
