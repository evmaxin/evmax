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
$route['default_controller'] = 'Home';
$route['(:any)/(:num)'] = 'Category/detail/$1';
$route['c/(:any)/(:num)'] = 'Category/index';
$route['c'] = 'Home';
$route['category/(:any)/(:any)'] = 'Category/index';
$route['c/(:any)/(:num)/(:num)'] = 'Category/index';
$route['store/(:any)'] = 'Store/index';
$route['store/(:any)/(:num)'] = 'Store/index';
$route['store/(:any)/(:num)/(:num)'] = 'Store/index';
//$route['store/(:any)/(:any)/(:any)/(:any)'] = 'Category/index';
$route['category/(:any)/(:num)/(:num)'] = 'Category/index';
$route['admin'] = 'admin/index/login';
$route['autocomplete'] = "search/autocomplete";
//admin merchant module added on 06
$route['merchant'] = "admin/merchant/Index";
$route['merchant/login'] = "admin/index/merchantLogin";
$route['buyers-guide'] = "BuyersGuide/index";
$route['erickshaw'] = "ERickshaws/index";
$route['battery'] = "Home/battery";
$route['membership'] = "Home/membership";
$route['digitalcredit'] = "Home/digitalcredit";
$route['digitalcredit'] = "Home/digitalcredit";
$route['terms-conditions'] = "Termsandconditions/index";
$route['privacy-policy'] = "Termsandconditions/privacy";
//


//$route['(:any)/(:num)'] = "Home/detail/$1";
//$route['Welcome/(:any)/(:num)'] = "Welcome/test/$1";// it will shown when  like this "URL/Welcome/lakme-absolute-precision-liner-0.35g/2"
$route['404_override'] = 'fourofour';
//$route['Welcome/(:num)'] = 'Welcome/index/$1';
$route['translate_uri_dashes'] = FALSE;
