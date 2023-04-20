<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::group(['prefix' => 'questions'], function () {
    Route::get('/one',  [QuestionController::class, 'QuestionOne']);

    Route::get('/two-endpoint-one',  [QuestionController::class, 'QuestionTwoEndpointOne']);
});
