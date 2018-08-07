<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// making a model, as an example:

class User extends Illuminate\Database\Eloquent\Model {
    
}

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/keygen', function() {
    echo str_random(32);
});


$router->get('/companies', 'CompaniesController@showAllCompanies');
$router->get('/companies/{id}', 'CompaniesController@getCompanyById');

$router->get('/companies/types/{type}', 'CompaniesController@getCompanyByType');

$router->get('/employees','EmployeesController@showAllEmployees');
$router->get('/employees/{id}', 'EmployeesController@showEmployeeById');
$router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');