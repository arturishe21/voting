<?php

Route::group(['middleware' => ['web']], function () {
    Route::group(
        ['prefix' => 'admin', 'middleware' => 'auth.admin'],
        function () {
            Route::post ('delete-answer/{id}', 'Vis\Voting\VotingControllers@doDeleteAnswer');
        });
});