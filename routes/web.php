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

// si avem si cerintele, sa-mi fie mai usor
/*
Fork-uiti repo-ul curent si clonati-va fork-ul

Creati un CRUD API cu urmatoarele specificatii:
- folositi structura de baza de date creata la Tema 2 (folosind migratii)
- Creati sectiuni de administrare / listare pentru Companies si Employees care sa foloseasca toate operatiile CRUD si principalele verbe
    - GET pe toate item-urile
    - GET pe un item
    - POST pentru item nou
    - DELETE item
    - PATCH / PUT pentru un item existent
- Folositi Postman ca sa va testati API-ul
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/keygen', function() {
    echo str_random(32);
});

/// to do: rework the URLs to respect the standard

// solutions for item Company
$router->get('/companies', 'CompaniesController@show');
$router->get('/companies/{id}', 'CompaniesController@index');
// $router->get('/companies/create', 'CompaniesController@create'); for a view in Laravel
$router->post('/companies', 'CompaniesController@store');
$router->delete('/companies/{id}', 'CompaniesController@destroy');
$router->put('/companies/{id}', 'CompaniesController@update');
$router->patch('/companies/{id}', 'CompaniesController@edit');

// solutions for item Employee
$router->get('/employees','EmployeesController@show');
$router->get('/employees/{id}', 'EmployeesController@index');
// $router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');
$router->post('/employees', 'EmployeesController@store');
$router->delete('/employess/{id}', 'EmployeesController@destroy');
$router->put('/employees/{id}', 'EmployeesController@update');
$router->patch('/employees/{id}', 'EmployeesController@edit');