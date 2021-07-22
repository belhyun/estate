<?php

use Illuminate\Support\Facades\Route;

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
    return view('/index');
});

Route::get('/service', function () {
    return view('/service');
});

Route::get('/pay-select', function () {
    return view('/pay-select');
});

Route::get('/mypage-user', function () {
    return view('/mypage-user');
});

Route::get('/board-main', function () {
    return view('/board-main');
});

Route::get('/login-main', function () {
    return view('/login-main');
});

Route::get('/sign', function () {
    return view('/sign');
});

Route::get('/signup-main', function () {
    return view('/signup-main');
});

Route::get('/login-all', function () {
    return view('/login-all');
});

Route::get('/login', function () {
    return view('/login');
});

Route::get('/login-sns', function () {
    return view('/login-sns');
});

Route::get('/signup-all', function () {
    return view('/signup-all');
});

Route::get('/signup', function () {
    return view('/signup');
});

Route::get('/sign-comp', function () {
    return view('/sign-comp');
});

Route::get('/mypage-user-edit', function () {
    return view('/mypage-user-edit');
});

Route::get('/pay-search', function () {
    return view('/pay-search');
});

Route::get('/pay-history', function () {
    return view('/pay-history');
});

Route::get('/pay-history-res', function () {
    return view('/pay-history-res');
});

Route::get('/my-page-user', function () {
    return view('/my-page-user');
});

Route::get('/signup-email', function () {
    return view('/signup-email');
});

Route::get('/pay-2', function () {
    return view('/pay-2');
});

Route::get('/board-faq', function () {
    return view('/board-faq');
});

Route::get('/board-question', function () {
    return view('/board-question');
});

Route::get('/board-notice', function () {
    return view('/board-notice');
});

Route::get('/board-policy-main', function () {
    return view('/board-policy-main');
});

Route::get('/policy-terms', function () {
    return view('/policy-terms');
});

Route::get('/policy-privacy', function () {
    return view('/policy-privacy');
});

Route::get('/policy-marketing', function () {
    return view('/policy-marketing');
});

Route::get('/main', function () {
    return view('/main');
});

Route::get('/pay', function () {
    return view('/pay');
});

Route::get('/mypage', function () {
    return view('/mypage');
});

Route::get('/mypage-2', function () {
    return view('/mypage-2');
});

Route::get('/index', function () {
    return view('/index');
});




