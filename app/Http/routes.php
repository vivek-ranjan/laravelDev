<?php

use App\Task;
use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//  Route::get('/', function () {
//  return view('welcome');
//  });
 

Route::get('/', 'TaskController@index');
 
Route::resource('tasks', 'TaskController');


/* You can make changes from route itself */
/**
 * Show Task Dashboard
 */
//Route::get('/', function () {
//    $tasks = Task::orderBy('created_at', 'desc')->get();
//    return view('tasks', ['tasks' => $tasks]);
//});
//
///**
// * Add New Task
// */
//Route::post('/task', function (Request $request) {
//    $validator = Validator::make($request->all(), [
//                'name' => 'required|max:255',
//    ]);
//
//    if ($validator->fails()) {
//        return redirect('/')
//                        ->withInput()
//                        ->withErrors($validator);
//    }
//
//    $task = new Task;
//    $task->name = $request->name;
//    $task->save();
//
//    return redirect('/');
//});
//
///**
// * Delete Task
// */
//Route::delete('/task/{task}', function (Task $task) {
//    $task->delete();
//    return redirect('/');
//});
//
//Route::post('/task/{task}', function (Task $task) {
//    return view('edit', ['task' => $task]);
//});
//
// Route::put('/task/{task}', function (Request $request) {
//    $validator = Validator::make($request->all(), [
//                'name' => 'required|max:255',
//    ]);
//
//    if ($validator->fails()) {
//        return redirect('/')
//                        ->withInput()
//                        ->withErrors($validator);
//    }
//
//    $id = $request->input('id');
//    $task = Task::find($id);
//    $task->name = $request->name;
//    $task->save();
//
//    return redirect('/');
//});




