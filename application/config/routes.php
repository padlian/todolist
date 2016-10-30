<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['json'] = 'app/get_json';
$route['todo'] = 'app/data_json';
$route['get_list'] = 'app/get_list';
$route['list'] = 'app';
$route['default_controller'] = 'app';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
