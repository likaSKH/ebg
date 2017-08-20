<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/delete']='admin/delete';
$route['admin/create']='admin/create';
$route['admin']='admin/select';
$route['admin/catalog']='admin/select';
$route['catalogs/(:any)']='pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['catalogs']='pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
