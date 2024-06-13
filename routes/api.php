<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;


Route::get('/hello', function () {
    return "hello world";
});

Route::get('inquiry', [InquiryController::class, 'index']);

Route::post('inquiry', [InquiryController::class, 'store']);


