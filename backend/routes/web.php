<?php

Auth::routes();

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

// Route::prefix('register')->name('register.')->group(function () {
//     Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
// });

Route::group(['middleware' => 'auth', 'prefix' => 'books', 'as' => 'books.'], function() {

    // ===== Book =====
    // 書籍登録
    Route::get('/create', 'BookController@create')->name('create');
    Route::post('/create', 'BookController@store')->name('store');

    // API検索フォーム
    Route::get('/search', 'BookController@showSearchForm')->name('search');
    Route::post('/search', 'BookController@search');
    // 検索から書籍登録
    Route::get('/api_register/{book_id}', 'BookController@apiRegister')->name('apiRegister');
    // Route::get('/api', 'BookController@api')->name('api');

    // 書籍一覧
    Route::get('/', 'BookController@index')->name('index');
    // 書籍一覧 (検索)
    Route::post('/', 'BookController@index')->name('index');

    // メモ一覧
    Route::get('/{book}', 'BookController@show')->name('show');

    // メモ一覧(検索)
    Route::post('/{book}', 'BookController@show')->name('show');

    // 書籍編集
    Route::get('/{book}/edit', 'BookController@edit')->name('edit');
    Route::patch('/{book}/edit', 'BookController@update')->name('update');

    // 書籍削除
    Route::delete('/{book}/destroy', 'BookController@destroy')->name('destroy');

    // ===== Memo =====
    Route::group(['prefix' => '{book}/memos', 'as' => 'memos.'], function(){

        // メモ登録
        Route::get('/create', 'MemoController@create')->name('create');
        Route::post('/create', 'MemoController@store')->name('store');

        // メモ編集
        Route::get('/{memo}/edit', 'MemoController@edit')->name('edit');
        Route::patch('/{memo}/edit', 'MemoController@update')->name('update');

        // メモ削除
        Route::delete('/{memo}/destroy', 'MemoController@destroy')->name('destroy');

    });

});

// ===== User =====
Route::group(['middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function() {
    // ユーザー更新
    Route::get('/{user}/edit', 'UserController@edit')->name('edit');
    Route::patch('/{user}/edit', 'UserController@update');

    // ユーザー削除
    Route::delete('/{user}/destroy', 'BookController@destroy')->name('destroy');

});


Route::get('/home', 'HomeController@index')->name('home');
