<?php


Route::group(['namespace' => 'Mahfouz\Contact\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact-view');
    Route::post('contact','ContactController@send')->name('send-contact');
});
