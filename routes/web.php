<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("index");
});

Route::get("/test-path", function () {
    dd(
        file_exists(
            "/home/paul/Documents/web/wheel_of_chores/database/database.sqlite"
        )
    );
});
