<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chores as ChoresController;

Route::get("/", function () {
    return view("index");
});

Route::get("/", [ChoresController::class, "getAllChores"]);

Route::get("/test-path", function () {
    dd(
        file_exists(
            "/home/paul/Documents/web/wheel_of_chores/database/database.sqlite"
        )
    );
});
