<?php
Route::group(['namespace' => 'rimon\contact\Http\Controllers'],function(){
	Route::get('contact','ContactController@create')->name('contact.create');
	Route::post('contact/store','ContactController@store')->name('contact.store');
});
