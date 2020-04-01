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

//認証
Auth::routes();

//トップ画面
Route::get('/', function () {
    return view('toppage/top');
});

//クイズ画面
Route::get('/mainpage', 'TruefalsesCntroller@show');

//管理者CRUD
Route::get('/admin/home', 'Admin\SettingCntroller@home');
Route::get('/admin/regist', 'Admin\SettingCntroller@adregist');

//クイズ登録
Route::get('/admin/tf/regist', 'Admin\ManagementCntroller@tfregist');
Route::post('/admin/tf/regist', 'Admin\ManagementCntroller@create')->name('tf.regist');
//クイズ一覧
Route::get('/admin/truefalselists', 'Admin\ManagementCntroller@lists')->name('tf.lists');
//クイズ編集
Route::get('/admin/{truefalse_id}/edit', 'Admin\ManagementCntroller@edit')->name('tf.edit');
//クイズ更新
Route::post('/admin/{truefalse_id}', 'Admin\ManagementCntroller@update');
//クイズ削除
Route::post('/admin/{truefalse_id}/delete', 'Admin\ManagementCntroller@destroy')->name('tf.delete');
//プライバシーポリシー
Route::get('/policy', function () {
    return view('sitepolicypage/policy');
});
//ajax
Route::get('/ajax/menu', 'Ajax\TruefalsesCntroller@getQuizAll');