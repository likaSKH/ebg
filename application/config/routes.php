<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['catalog/json']='admin/select';
$route['admin']='admin/create';
$route['admin/catalog']='admin/create';
$route['catalogs/(:any)']='pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['catalogs']='pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
