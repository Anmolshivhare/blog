<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact'] = 'frontend/contact';

//$route['services/(:any)'] = 'frontend/service/$1';

/*$route['(:any)'] = 'frontend/service/$1';/*$route['(:any)-(:any)'] = 'frontend/service/$1-$2';*/

$route['our-work/(:any)'] = 'frontend/sapservice/$1';

$route['about'] = 'frontend/about';
$route['advantages'] = 'frontend/advantages';
$route['faq'] = 'frontend/faq';$route['donate'] = 'frontend/donate';
$route['portfolio'] = 'frontend/portfolio';

$route['privacypolicy'] = 'frontend/privacypolicy';
$route['blog'] = 'frontend/blog';
$route['blog-detail/(:any)'] = 'frontend/blog_detail/$1';$route['gallery'] = 'frontend/gallery';$route['compaign'] = 'frontend/event';$route['compaign-detail/(:any)'] = 'frontend/event_detail/$1';  $route['become_volunteer'] = 'frontend/become_volunteer';

$route['product'] = 'frontend/product';
$route['product-detail/(:any)'] = 'frontend/product_detail/$1';
/* admin route */
$route['admin'] = 'AdminController/index';
$route['sap_show'] = 'AdminController/sap_show';
$route['client_show'] = 'AdminController/client_show';
$route['client'] = 'AdminController/client';
$route['mysevice_add'] = 'AdminController/mysevice_add';
$route['update_client/(:any)'] = 'AdminController/update_client/$1';
$route['update_sap/(:any)'] = 'AdminController/update_sap/$1';$route['(:any)'] = 'frontend/main_service/$1';$route['package/(:any)'] = 'frontend/service/$1';$route['404_override'] = 'home/error';$route['icc-cricket-batting-rankings'] = 'cricplex/get_batting_ranking';$route['icc-cricket-bowling-rankings'] = 'cricplex/get_bowling_ranking';$route['icc-cricket-all-rounders-rankings'] = 'cricplex/get_allrounder_ranking';$route['icc-cricket-team-rankings'] = 'cricplex/get_team_ranking';$route['cricket-teams'] = 'cricplex/get_teams';$route['recent-cricket-matches'] = 'cricplex/get_recent_matches';$route['live-score'] = 'cricplex/get_live_score';$route['live-score/(:any)'] = 'cricplex/get_scorecard/$1';$route['translate_uri_dashes'] = FALSE;