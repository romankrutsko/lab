<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'namespace' => 'App\Http\Controllers\Api',
], function () {
    Route::get('faculty', "FacultyApiController@getAll");
    Route::get('faculty/{id}', "FacultyApiController@getById");
    Route::post('faculty', "FacultyApiController@save");
    Route::put('faculty/{id}', "FacultyApiController@update");
    Route::delete('faculty/{id}', "FacultyApiController@delete");
    Route::get('department', "DepartmentApiController@getAll");
    Route::get('department/{id}', "DepartmentApiController@getById");
    Route::post('department', "DepartmentApiController@save");
    Route::put('department/{id}', "DepartmentApiController@update");
    Route::delete('department/{id}', "DepartmentApiController@delete");
    Route::get('group', "GroupApiController@getAll");
    Route::get('group/{id}', "GroupApiController@getById");
    Route::post('group', "GroupApiController@save");
    Route::put('group/{id}', "GroupApiController@update");
    Route::delete('group/{id}', "GroupApiController@delete");
    Route::get('teacher/{id}', "TeacherApiController@getById");
    Route::post('teacher', "TeacherApiController@save");
    Route::put('teacher/{id}', "TeacherApiController@update");
    Route::delete('teacher/{id}', "TeacherApiController@delete");
    Route::get('student/{id}', "StudentApiController@getById");
    Route::post('student', "StudentApiController@save");
    Route::put('student/{id}', "StudentApiController@update");
    Route::delete('student/{id}', "StudentApiController@delete");
    Route::get('discipline', "DisciplineApiController@getAll");
    Route::post('discipline', "DisciplineApiController@save");
    Route::put('discipline/{id}', "DisciplineApiController@update");
    Route::delete('discipline/{id}', "DisciplineApiController@delete");
    Route::get('schedule', "ScheduleApiController@getAll");
    Route::get('schedule/{id}', "ScheduleApiController@getById");
    Route::post('schedule', "ScheduleApiController@save");
    Route::put('schedule/{id}', "ScheduleApiController@update");
    Route::delete('schedule/{id}', "ScheduleApiController@delete");
}
);
