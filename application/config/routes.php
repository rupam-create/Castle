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
$route['default_controller'] = 'Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//homepage
$route['home']='Home/index';
$route['about']='About/index';
$route['search']='Search/index';
$route['banner']='Home/banner';
$route['viewbanner']='Home/viewbanner';
$route['addbanner']='Home/addbanner';
$route['bannerupdate']='Home/bannerupdate';
$route['bannerdel/:num']='Home/bannerdel';
$route['social']='Home/social';
$route['addsocial']='Home/addsocial';
$route['viewsocial']='Home/viewsocial';
$route['updatesocial']='Home/updatesocial';
$route['socialdel/:num']='Home/socialdel';

$route['customerfdbk']='Home/customerfdbk';
$route['addcustomerfdbk']='Home/addcustomerfdbk';
$route['viewcustomerfdbk']='Home/viewcustomerfdbk';
$route['updatecustomerfdbk']='Home/updatecustomerfdbk';
$route['customerfdbkdel/:num']='Home/customerfdbkdel';



$route['faq']='Home/faq';
$route['addfaq']='Home/addfaq';
$route['viewfaq']='Home/viewfaq';
$route['updatefaq']='Home/updatefaq';
$route['faqdel/:num']='Home/faqdel';
$route['consultation']='Home/consultation';
$route['viewconsultation']='Home/viewconsultation';
$route['consultationdel/:num']='Home/consultationdel';

$route['counter']='Home/counter';
$route['addcounter']='Home/addcounter';
$route['viewcounter']='Home/viewcounter';
$route['updatecounter']='Home/updatecounter';
$route['counterdel/:num']='Home/counterdel';

$route['homecontents']='Home/homecontents';
$route['addhomecontents']='Home/addhomecontents';
$route['viewhomecontents']='Home/viewhomecontents';
$route['updatehomecontents']='Home/updatehomecontents';
$route['homecontentdel/:num']='Home/homecontentdel';

//aboutpage
$route['aboutcontent']='About/aboutcontent';
$route['viewaboutcontent']='About/viewaboutcontent';
$route['addaboutcontent']='About/addaboutcontent';
$route['aboutcontentupdate']='About/aboutcontentupdate';
$route['aboutcontentdel/:num']='About/aboutcontentdel';

//properties
$route['properties']='Properties/index';
$route['properties/:any']='Properties/properties_details';
$route['propertiescontent']='Properties/propertiescontent';
$route['addpropertiescontent']='Properties/addpropertiescontent';
$route['viewpropertiescontent']='Properties/viewpropertiescontent';
$route['addpropertyimage']='Properties/addpropertyimage';
$route['propertiesupdate/:num']='Properties/propertiesupdate';
$route['propertiesimagedel/:num']='Properties/propertiesimagedel';
$route['propertiesdel/:num']='Properties/propertiesdel';
$route['updatepropertiescontent']='Properties/updatepropertiescontent';
$route['propertyform']='Properties/propertyform';
$route['propertyformview']='Properties/propertyformview';
$route['propertyformdel/:num']='Properties/propertyformdel';
//contactpage
$route['contact']='Contact/index';
$route['sendmail']='Contact/sendmail';
$route['viewcontact'] = 'Contact/contactfetch';
$route['contactdel/:num']='Contact/contactdel';

//gallery
$route['gallerys']='Gallery/index';
$route['gallery']='Gallery/gallery';
$route['viewgallery']='Gallery/viewgallery';
$route['addgallery']='Gallery/addgallery';
$route['galleryupdate']='Gallery/galleryupdate';
$route['gallerydel/:num']='Gallery/gallerydel';

//services
$route['services']='Home/services';
$route['viewservices']='Home/viewservices';
$route['addservices']='Home/addservices';
$route['servicesupdate']='Home/servicesupdate';
$route['servicesdel/:num']='Home/servicesdel';

//settings
$route['settings']='Settings/settings';
$route['addsettings']='Settings/addsettings';

//Admin parts
$route['admin']='Admin/index';



//Admin part
$route['login/:any']='Login/index';
$route['employeeregister']='Login/employeeregister';
$route['candidateregister']='Login/candidateregister';
$route['auth']='Login/auth';
$route['auth1']='Admin/auth1';
$route['Logout']='Login/logout';
$route['adminlogout']='Admin/adminlogout';
$route['adminlogin']='Admin/adminlogin';












