<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BetaController;

Route::get('/', function () {
    return view ("welcome") ;
});

Route::get('/hello', function () {
    return view ("hello") ;
});

route:: view("about",'/about');

route::get("game",[UserController::class,'game']);
route::get("2nd",[BetaController::class,'second']);
