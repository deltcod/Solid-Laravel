<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    Route::get('testSendEmail2', function(){

        Debugbar::startMeasure('SendSubscriptionEmail');
        dispatch(new \App\Jobs\SendSubscriptionEmail());
        Debugbar::stopMeasure('SendSubscriptionEmail');
        return 'Done!';

    });
});