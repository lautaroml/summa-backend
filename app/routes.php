 <?php

$router->get('', 'HomeController@home');
$router->get('employees', 'EmployeeController@index');
$router->get('employees/create', 'EmployeeController@create');
$router->post('employees', 'EmployeeController@store');