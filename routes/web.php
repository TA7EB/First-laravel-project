<?php
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view ("welcome") ;
});

Route::get('/hello', function () {
    return view ("hello") ;
});

route:: view("about",'/about');

route::get("game",[UserController::class,'game']);