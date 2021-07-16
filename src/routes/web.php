<?php
namespace Kadraliev\RobotTxtEditor;

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

Route::get('/edit-form', 'Kadraliev\Robottxteditor\Http\Controllers\RobotController@openFile')->name('editor.open');

Route::post('/edit-form', 'Kadraliev\Robottxteditor\Http\Controllers\RobotController@saveFile')->name('editor.save');
