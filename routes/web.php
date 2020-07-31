<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',[
   'uses' => 'PageController@index',
   'as' => 'homepage'
]);

Route::get('/about-us',[
   'uses' => 'PageController@aboutus',
   'as' => 'aboutus'
]);

Route::get('/libary',[
   'uses' => 'PageController@libary',
   'as' => 'libary'
]);

Route::get('/career-test',[
   'uses' => 'PageController@careertest',
   'as' => 'careertest'
]);

Route::get('/test',[
   'uses' => 'PageController@test',
   'as' => 'test'
]);

Route::get('/test1',[
   'uses' => 'PageController@test1',
   'as' => 'test1'
]);

Route::get('/test2',[
   'uses' => 'PageController@test2',
   'as' => 'test2'
]);

Route::get('/test_result',[
   'uses' => 'PageController@test_result',
   'as' => 'test_result'
]);


Route::get('/personality-test',[
   'uses' => 'PageController@personalitytest',
   'as' => 'personalitytest'
]);

Route::get('/contact-us',[
   'uses' => 'PageController@contactus',
   'as' => 'contactus'
]);


