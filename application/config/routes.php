<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'User/login';
$route['users'] = 'User/index';
$route['user-add'] = 'User/add';
$route['role'] = 'Role/index';
$route['role-add'] = 'Role/add';
$route['role-edit'] = 'Role/edit';

$route['authentification-echouer'] = 'pages/authentificationfailed';
