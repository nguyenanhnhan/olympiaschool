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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@getloginadmin');

// adminlogin
Route::get('/admin/login', 'UserController@getloginadmin');
Route::post('/admin/login', 'UserController@postloginadmin')->name('admin_login');
Route::get('admin/logout', 'UserController@logoutadmin');

Route::get('preview/lessonplans', 'LessonPlanController@preview_for_school')->name('preview_for_school');
Route::get('preview/lessonplans/{teacher_id}/{id}', 'LessonPlanController@school_preview')->name('school_preview');
Route::get('lessonplans/dtd1', 'LessonPlanController@lps_dtd1')->name('lps_dtd1');
Route::get('lessonplans/dtd1/{id}/{slug_name}', 'LessonPlanController@dtd1_teacher')->name('dtd1_teacher');

Route::group(['prefix' => 'teachers'], function () {
    
Route::get('/', 'TeacherController@getloginteacher')->name('page_login');
Route::get('login', 'TeacherController@getloginteacher')->name('page_login');
Route::post('login', 'TeacherController@postloginteacher')->name('teacher_login');
Route::get('logout', 'TeacherController@logoutteacher')->name('teacher_logout');
Route::get('index', 'TeacherController@teacher_index')->name('teacher_index');
Route::get('profile/{id}', 'TeacherController@teacher_profile')->name('teacher_profile');
Route::post('profile_update/{id}', 'TeacherController@profile_update')->name('profile_update');


Route::group(['prefix' => 'lesson_plan'], function () {
    Route::get('list', 'LessonPlanController@index')->name('show-lp');
    Route::get('add', 'LessonPlanController@create')->name('create-lp');
    Route::post('add', 'LessonPlanController@store')->name('store-lp');
    Route::get('edit/{id}', 'LessonPlanController@edit')->name('edit-lp');
    Route::post('edit/{id}', 'LessonPlanController@update')->name('update-lp');
    Route::get('delete/{id}', 'LessonPlanController@destroy')->name('destroy-lp');
    Route::get('preview/{teacher_id}/{id}', 'LessonPlanController@preview')->name('preview-lp');
});


});
Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {
    
    Route::get('select_school', 'PageController@select_school')->name('select_school');
    Route::post('school_selected', 'PageController@school_selected')->name('school_selected');
    Route::post('welcome/{id}{slug_name}', 'PageController@welcome_school')->name('welcome_school');

    Route::get('/dashboard', function () {
        return view('be/layouts/dashboard');
    });
    
    Route::get('table', function () {
        return view('be/user/list');
    });

    Route::group(['prefix' => 'ajax'], function () {
        
        Route::get('location/{id_location}', 'DefaultScheduleController@get_teacher')->name('default_schedule_show');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('list', 'UserController@index');
        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store')->name('user_add');
        Route::get('edit/{id}', 'UserController@edit');
        Route::post('edit/{id}', 'UserController@update')->name('user_edit');
        Route::get('delete/{id}', 'UserController@destroy')->name('user_destroy');
    });

    Route::group(['prefix' => 'pages'], function () {
        
    });
    
    Route::group(['prefix' => 'teachers'], function () {
        Route::get('list', 'TeacherController@index');
        Route::get('add', 'TeacherController@create');
        Route::post('add', 'TeacherController@store')->name('teacher_add');
        Route::get('edit/{id}', 'TeacherController@edit');
        Route::get('lesson-plans/{id}', 'TeacherController@teacher_lps')->name('teacher_lps');
        Route::get('view-lesson-plans/{teacher_id}/{id}', 'TeacherController@teacher_view_lps')->name('teacher_view_lps');
        Route::post('edit/{id}', 'TeacherController@update')->name('teacher_edit');
        Route::get('delete/{id}', 'TeacherController@destroy')->name('teacher_destroy');
    });
    
    Route::group(['prefix' => 'default-schedules'], function () {
        Route::get('list', 'DefaultScheduleController@index')->name('default_schedule_show');
        Route::get('add', 'DefaultScheduleController@create')->name('default_schedule_create');
        Route::post('add', 'DefaultScheduleController@store')->name('default_schedule_store');
        Route::get('edit/{id}', 'DefaultScheduleController@edit')->name('default_schedule_edit');
        Route::post('edit/{id}', 'DefaultScheduleController@update')->name('default_schedule_update');
        Route::get('delete/{id}', 'DefaultScheduleController@destroy')->name('default_schedule_destroy');

        
        Route::get('booking', 'DefaultScheduleController@default_booking')->name('default_booking');
        Route::get('booking/{id}', 'DefaultScheduleController@school_booking')->name('school_booking');
        Route::post('booking_result', 'DefaultScheduleController@default_result_booking')->name('default_result_booking');
    });
    
    Route::group(['prefix' => 'default'], function () {
        Route::get('list', 'ScheduleController@index');
        Route::post('add_booking', 'ScheduleController@add_booking')->name('add_booking');
        Route::get('schedules', 'ScheduleController@schedules')->name('list_booking');
        Route::post('cancel_booking', 'ScheduleController@cancel_booking')->name('cancel_booking');
        
    });

    Route::group(['prefix' => 'schedules'], function () {
        Route::get('list', 'ScheduleController@index');
        Route::get('add', 'ScheduleController@create');
        Route::post('add', 'ScheduleController@store')->name('schedule_add');
        Route::get('edit/{id}', 'ScheduleController@edit');
        Route::post('edit/{id}', 'ScheduleController@update')->name('schedule_edit');
        Route::get('delete/{id}', 'ScheduleController@destroy')->name('schedule_destroy');
        Route::get('booking', 'ScheduleController@booking');
        Route::post('booking_result', 'DefaultScheduleController@result_booking')->name('default_booking_result');
        Route::post('add_booking', 'ScheduleController@add_booking')->name('add_booking');
        Route::get('schedules', 'ScheduleController@schedules')->name('list_booking');
        Route::post('schedule_booking', 'ScheduleController@schedule_booking')->name('schedule_booking');
        Route::post('cancel_booking', 'ScheduleController@cancel_booking')->name('cancel_booking');
        
    });

    Route::group(['prefix' => 'evaluation'], function () {
        
        Route::get('test_send_email', 'EvaluationController@test_send_email')->name('test_send_email');
        
        Route::get('json', 'EvaluationController@json');

        Route::get('leuleu', function () {
            return view('be/charts/test_charts');
        });

        Route::get('test', function () {
            return view('be/evaluation/testjson');
        });
        Route::post('test', 'EvaluationController@test')->name('test');
        Route::get('draft', 'EvaluationController@index')->name('list_draft');
        Route::post('completed_evaluation', 'EvaluationController@completed_evaluation')->name('completed_evaluation');
        Route::get('completed', 'EvaluationController@completed')->name('list_completed');
        Route::get('show/{id}', 'EvaluationController@show')->name('evaluation_show');
        Route::get('view/{id}', 'EvaluationController@view');
        Route::post('save_evaluation', 'EvaluationController@store')->name('evaluation_save');
        Route::post('complete_evaluation', 'EvaluationController@complete')->name('evaluation_complete');
        Route::get('add', 'EvaluationController@create');
        Route::post('add', 'EvaluationController@store')->name('evaluation_add');
        Route::get('edit/{id}', 'EvaluationController@edit');
        Route::post('edit/{id}', 'EvaluationController@update')->name('evaluation_update');
        Route::get('delete/{id}', 'EvaluationController@destroy')->name('evaluation_destroy');
        
        Route::get('ranking', 'EvaluationController@ranking')->name('ranking');
        Route::post('ranking_result', 'EvaluationController@ranking_result')->name('ranking_result');
        Route::get('chart_search', 'EvaluationController@chart_search')->name('chart_search');
        Route::post('chart_location_result', 'EvaluationController@chart')->name('chart_location_result');

        // Route::get('chart', 'EvaluationController@chart')->name('chart');
        Route::get('chart_location', 'EvaluationController@chart_location')->name('chart_location');
    });

    Route::get('export', 'ExcelController@export')->name('export');
    Route::get('excel', 'ExcelController@importExportView');
    Route::post('schedulesimport', 'ExcelController@schedulesimport')->name('schedulesimport');
    Route::post('sessionimport', 'ExcelController@sessionimport')->name('sessionimport');
});
