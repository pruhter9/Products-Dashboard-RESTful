<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['new'] = "products/new_product";
$route['create'] = "products/create_product";
$route['show/(:any)'] = "products/show/$1";
$route['edit/(:any)'] = "products/edit/$1";
$route['update/(:any)'] = "products/update/$1";
$route['delete/(:any)'] = "products/destroy_product/$1"

?>