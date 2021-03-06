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

Route::get("/", "mainController@index")->name("home");
Route::get("/about", "mainController@about")->name("about");
Route::get("/buy", "mainController@buy")->name("buy");


//Route::get("/about", "mainController@about");


/*
/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
/.idea
/.vscode
/.vagrant
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
.env

*/


