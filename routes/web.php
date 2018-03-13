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

use App\Project;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::match('get', '/projects', function(){
    $projects = Project::all();
    // return response()->json($projects);
    return view('projects')->with('projects', $projects);
});

Route::match('post', '/project/{project_id}', function(Request $request, $project_id){
    $project = new Project;
    $project->project_id = $project_id;
    $project->date = Carbon::today();
    return $project->save();
});

