<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'User/login';
$route['utilisateur'] = 'User/index';
$route['role'] = 'Role/index';
$route['domaine'] = 'Domaine/index';
$route['hebergement'] = 'Hebergement/index';
$route['ip'] = 'Ip/index';
$route['theme'] = 'Theme/index';
$route['registrar'] = 'Registrar/index';
$route['utilisateur/compte/(:any)'] = 'User/detail/$1';
$route['cms'] = 'Cms/index';
$route['techno'] = 'Techno/index';
$route['type'] = 'Type/index';

$route['motDePasse'] = 'User/forgotpassword';
$route['motDePasseError'] = 'User/mailFailed';
$route['reinitMotDePasse'] = 'User/forgotpasswordconfirmation';
$route['nouveauMotDePasse'] = 'User/npwd';
$route['nouveauMotDePasseConfirmation'] = 'User/newpasswordconfirmation';
$route['nouveauMotDePasseError'] = 'User/passwordfailed';

$route['authentification'] = 'pages/authentificationfailed';
