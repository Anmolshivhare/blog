<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';



$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

$route['pages/(:any)'] = 'home/our_page/$1';


 
$route['user-login'] = 'home/apply_login';

$route['akhil-lodhi-mahasabha'] = 'home/akhil_lodhi_mahasabha';   
$route['team'] = 'home/player';
$route['match-center'] = 'home/get_teams';
$route['gallery'] = 'home/gallery';
$route['gallery/(:any)/(:any)'] = 'home/gallery_detail/$1/$2';

$route['contact-us'] = 'home/contact';

$route['admin'] = 'Admin/index';



$route['sitemap\.xml'] = "home/sitemap";