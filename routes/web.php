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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
        // 詳細ページ
         Route::get('teacher_info/{teacher_info}','HomeController@show')->name('lesson');
        
        // チャット送信
        Route::post('add/{id}', 'CommentController@add')->name('add');
        Route::get('add/{id}','CommentController@showform')->name('add');
        // 予約
        Route::get('reserve/{id}','ReserveController@create');
         Route::get('showreserve','ReserveController@show');
        // 決済機能
        // Route::post('pay', 'PaymentController@pay');

    });
});

//先生
Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:teacher')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
        Route::get('newinfo','HomeController@newinfo');
        Route::post('newinfo','HomeController@store');
        Route::get('newlesson','LessonController@newlesson');
        Route::post('newlesson','LessonController@store');
        Route::get('add', 'CommentController@showform')->name('add');
        Route::post('add','CommentController@add')->name('add');
        // 予約表示
         Route::get('showreserve/{showreserve}','ReserveController@show');
         
        
        // レッスン削除
        Route::delete('lessondelete/{lesson}','LessonController@destroy');
    });

});