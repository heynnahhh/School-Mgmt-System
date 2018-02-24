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

$route['lr/juniorhs'] = 'LR/home/juniorhs';
$route['lr/seniorhs'] = 'LR/home/seniorhs';
$route['lr/juniorhs_subjects'] = 'LR/home/juniorhs_subjects';
$route['lr/seniorhs_subjects'] = 'LR/home/seniorhs_subjects';
$route['lr/juniorhs_view_files'] = 'LR/home/juniorhs_view_file';
$route['lr/seniorhs_view_files'] = 'LR/home/seniorhs_view_file';
$route['lr/view_file'] = 'LR/home/view_file';
$route['lr/register'] = 'LR/home/register';


$route['lr/profile'] = 'LR/home/p_home';
$route['lr/profile/juniorhs'] = 'LR/home/p_juniorhs';
$route['lr/profile/seniorhs'] = 'LR/home/p_seniorhs';
$route['lr/profile/juniorhs_subjects'] = 'LR/home/p_juniorhs_subjects';
$route['lr/profile/seniorhs_subjects'] = 'LR/home/p_seniorhs_subjects';
$route['lr/profile/juniorhs_view_files'] = 'LR/home/p_juniorhs_view_file';
$route['lr/profile/seniorhs_view_files'] = 'LR/home/p_seniorhs_view_file';
$route['lr/profile/view_file'] = 'LR/home/p_view_file';


$route['default_controller'] = 'SMS/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
