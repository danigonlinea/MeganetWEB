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

$route['default_controller'] = "Inicio/index";
$route['404_override'] = '';
$route['Products'] = "Products_controller/index";
$route['Services'] = "Services_controller/index";
$route['QualityNatureCertificates'] = "QualityCertificates_controller/index";
$route['Prizes'] = "Prizes_controller/index";
$route['Contact'] = "Contact_controller/index";
$route['AboutUs'] = "About_us_controller/index";
$route['CountersCommunications'] = "Counters_controller/index";
$route['IncidenceReports'] = "Incidence_reports_controller/index";
$route['Associations'] = "Associations_controller/index";
$route['GalileoSystem'] = "Galileo_system_controller/index";
$route['GymkhanaVIIGallery'] = "Gymkhana_VII_controller/index";
$route['SonosSystem'] = "Sonos_system_controller/index";
$route['Promotions'] = "Promotions_controller/index";

//$route['Products(/:any)'] = "Products_controllerhtml";

/* End of file routes.php */
/* Location: ./application/config/routes.php */