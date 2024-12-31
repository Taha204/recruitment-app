<?php

// routes/api.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test-connection', function () {
    return response()->json([
        'success' => true,
        'message' => 'API connection successful!',
    ]);
});
