<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    Route::get('testSendEmail2', function(){
     dispatch(new \App\Jobs\SendSubscriptionEmail());
        return 'Done!';
    });
});