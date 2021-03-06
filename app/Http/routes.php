<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource('companies', 'CompanyController');


Route::get('test', function () {


    $conn = new mysqli("localhost","mario", "root", "vtiger_tenant_13");
    $sql = "UPDATE vtiger_users SET user_name='admin_xxx' WHERE id=1";
    $result = $conn->query($sql);
    dd($result);

});


Route::get('test2', function () {

    dd(URL::to(''));

});
