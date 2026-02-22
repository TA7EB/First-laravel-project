<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BetaController;

Route::get("/", [UserController::class,"game"])->name("home");

Route::get('/hello', function () {
    return view ("hello") ;
});

route:: view("about",'/about');
route:: view("contract",'/contract');

route::get("game",[UserController::class,'game']);
route::get("2nd",[BetaController::class,'second']);
route::post("users",[UserController::class,'getData']);
route:: view("login",'/users');
