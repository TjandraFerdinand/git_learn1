<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//TASK 1
//$route['default_controller'] = 'user';
$route['ferdi/test'] = 'ferdi';
$route['user/detail/(:num)'] = 'user/detail/$1';


//TASK 2 LOGIN
$route['task2/admin/login'] = 'lp_test2/login';
$route['task2/admin/cek_login'] = 'lp_test2/cek_login';

//TASK 2 LOGOUT
$route['task2/admin/logout'] = 'lp_test2/logout';

//TASK 2 CREATE LP
$route['default_controller'] = 'lp_test2';
$route['task2/user/confirm'] = 'lp_test2/user_confirm';
$route['task2/user/register'] = 'lp_test2/user_register';


//TASK 2 ROUTE FOR ADMIN SITE
$route['task2/admin/index']  = 'lp_test2/admin_list';

$route['task2/admin/u/detail/(:num)'] = 'lp_test2/admin_u_detail/$1';


$route['task2/admin/i/create'] = 'lp_test2/admin_i_create';
$route['task2/admin/i/confirm'] = 'lp_test2/admin_i_confirm';
$route['task2/admin/i/register'] = 'lp_test2/admin_i_register';

$route['task2/admin/o/create'] = 'lp_test2/admin_o_create';
$route['task2/admin/o/confirm'] = 'lp_test2/admin_o_confirm';
$route['task2/admin/o/register'] = 'lp_test2/admin_o_register';





$route['404_override'] = 'user/_404';
$route['translate_uri_dashes'] = FALSE;
