<?php

use Illuminate\Http\Request;
Use App\Raw;

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

Route::match('post', '/data', function(){
 //
});

Route::match('get', 'data/{project}', function($project){
 //
});

Route::match('get', '/projects', function(){
    $raw_data = Raw::all();
    return response()->json($raw_data);    
});