<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List articles
route::get('articles','ArticleController@index');

//List Specific Article
route::get('article/{id}','ArticleController@show');

//Create new Article
route::post('article','ArticleController@store');

//Update Article
route::put('article','ArticleController@store');

//Destroy
route::delete('article/{id}','ArticleController@destroy');