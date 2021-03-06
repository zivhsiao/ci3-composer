<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['backend/logout'] = 'login/logout';

$route['backend/posts/index/update/(:num)'] = 'backend/posts/update/$1';
$route['backend/posts/index/insert'] = 'backend/posts/insert';

$route['backend/categories/index/update/(:num)'] = 'backend/categories/update/$1';
$route['backend/categories/index/insert'] = 'backend/categories/insert';
