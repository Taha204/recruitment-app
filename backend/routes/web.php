<?php

// routes/api.php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the Recruitment API']);
});
