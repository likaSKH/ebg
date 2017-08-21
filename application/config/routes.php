<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/edit_save_catalog']='admin/edit_save_catalog';
$route['admin/edit_catalog/(:id)']='admin/edit_catalog';

$route['admin/upload']='admin/upload';
$route['admin/delete']='admin/delete';
$route['admin/create']='admin/create';
$route['admin']='admin/select';
$route['admin/catalog']='admin/select';
$route['catalogs/(:any)']='pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['catalogs']='pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
