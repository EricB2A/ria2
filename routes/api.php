<?php

use Illuminate\Http\Request;
use App\Raw;
use App\Project;
use Carbon\Carbon;

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

Route::match('get', '/projects', function(){
    $projects = Project::all();
    return response()->json($projects);
});

Route::match('post', '/data/{project_id}', function(Request $request, $project_id){
    $project = new Project;
    $project->project_id = $project_id;
    $project->date = Carbon::today();
    $project->data = json_decode($request->data);
    $project->save();
    return $project;
}); 

Route::match('get', 'data/{project_id}', function($project_id){
    $project = Project::where("project_id", $project_id)->get();
    return response()->json($project);
});