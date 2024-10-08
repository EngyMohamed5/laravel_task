<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('students/create',[StudentController::class,'create']);


Route::get('/students' , [StudentController::class , 'index']);
Route::get('/students/{student}' , [StudentController::class , 'show']);
Route::post('/students',[StudentController::class,'store']);
Route::post('/students/{student}',[StudentController::class,'update']);
Route::delete('/students/{student}',[StudentController::class,'destroy']);
