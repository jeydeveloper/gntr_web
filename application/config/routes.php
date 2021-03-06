<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.  
| 
*/

/* Routing untuk Backstage */
// $route['default_controller'] 	= "frontend_home/home";
$route['default_controller'] 	= "frontend_landingpage/landingpage";
$route['home'] 	= "frontend_home/home";
$route['about'] 	= "frontend_about/about";
$route['service'] 	= "frontend_service/service";
$route['project'] 	= "frontend_project/project";
$route['our-work'] 	= "frontend_ourwork/ourwork";
$route['contact'] 	= "frontend_contact/contact";
$route['arsitektual'] 	= "frontend_arsitektual/arsitektual";
$route['sipil'] 	= "frontend_sipil/sipil";
$route['mekanikal'] 	= "frontend_mekanikal/mekanikal";
$route['elektrikal'] 	= "frontend_elektrikal/elektrikal";
$route['procurement'] 	= "frontend_procurement/procurement";
$route['outsourcing'] 	= "frontend_outsourcing/outsourcing";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */