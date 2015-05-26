<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array('uses' => 'RegistrationController@showLogin'));

	// route to process the form
Route::post('/', array('uses' => 'RegistrationController@doLogin'));

Route::get('signup', function()
{
	return View::make('pages.register');

 
});

Route::post('signup', 'RegistrationController@register');


Route::get('logout' , 'RegistrationController@doLogout');

Route::get('/reset/{id}' , 'HomeController@getReset');

Route::post('/reset/{id}' , 'HomeController@postUserPasswordChange');

Route::get('profile/{id}' , 'HomeController@getProfile');

Route::get('profile/{id}/edit' , 'HomeController@getEdit');

Route::post('profile/{id}/addProfile' , 'HomeController@addProfile');

Route::group(['before' => 'students'],function(){

    Route::get('students', function()
    {
        $users = User::orderBy('lastName')->get();

        return View::make('pages.students', ['users' => $users]);
    });

    Route::get('students/edit/{id}', function($id)
    {
        $user = User::find($id);

        return View::make('pages.editStudent', ['user' => $user] );
    });

    Route::post('/students/edit/{id}' , 'HomeController@postEdit');

    Route::get('students/{id}/reports' , 'HomeController@report');

    Route::get('students/{id}/report1' , 'HomeController@report1');

    Route::get('students/{id}/report2' , 'HomeController@report2');

    Route::get('students/{id}/report3' , 'HomeController@report3');

    Route::get('students/search' , function()
    {
       $users = User::orderBy('lastName')->get();

        return View::make('pages.search', ['users' => $users]);
    });

    Route::post('/students/search' , 'HomeController@search');


});
