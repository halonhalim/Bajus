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
$route['default_controller'] = 'home';
$route['management'] = 'admin/index';
$route['login-check'] = 'admin/admin_login_check';
$route['dashboard'] = 'Super_admin/index';

$route['logout'] = 'Super_admin/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*--------------For Admin ------------------*/



 $route['add-contact'] = 'Contact/add_contact';
$route['save-contact'] = 'Contact/save_contact';
$route['manage-category'] = 'Super_admin/manage_category';
$route['delete-category/(.+)'] = 'Super_admin/delete_category/$1';
$route['update'] = 'Contact/update';
$route['edit-category/(.+)'] = 'Super_admin/edit_category/$1';

$route['unpublish-category/(.+)'] = 'Super_admin/unpublish_category/$1';
$route['publish-category/(.+)'] = 'Super_admin/publish_category/$1';

$route['edit-category/(.+)'] = 'Super_admin/edit_category/$1';
$route['update-category'] = 'Super_admin/update_category';
$route['add-manufacture'] = 'Super_admin/add_manufacture';
$route['save-manufacture'] = 'Super_admin/save_manufacture';
$route['manage-manufacture'] = 'Super_admin/manage_manufacture';
$route['unpublish-manufacture/(.+)'] = 'Super_admin/unpublish_manufacture/$1';
$route['publish-manufacture/(.+)'] = 'Super_admin/publish_manufacture/$1';
$route['delete-manufacture/(.+)'] = 'Super_admin/delete_manufacture/$1';
$route['edit-manufacture/(.+)'] = 'Super_admin/edit_manufacture/$1';
$route['update-manufacture'] = 'Super_admin/update_manufacture';
$route['add-products'] = 'Super_admin/add_products';
$route['save-products'] = 'Super_admin/save_products';
$route['manage-products'] = 'Super_admin/manage_products'; 




$route['delete-baners/(.+)'] = 'Banners/delete_baners/$1';
$route['delete-link/(.+)'] = 'Link/delete_link/$1';
$route['manage-baners'] = 'Banners/manage_baners';
$route['edit-baners/(.+)'] = 'Banners/edit_baners/$1';
$route['update-baners'] = 'Banners/update_baners';

$route['edit-link/(.+)'] = 'Link/edit_link/$1';
$route['update-link'] = 'Link/update_link';
$route['delete-news/(.+)'] = 'News/delete_news/$1';
$route['manage-news'] = 'News/manage_news';
$route['update-news'] = 'News/update_news';
$route['delete-adverstiment/(.+)'] = 'Adverstiment/delete_adverstiment/$1';
$route['manage-adverstiment'] = 'Adverstiment/manage_adverstiment';

$route['news_details/(.+)']='news/news_details/$1';
$route['edit-partner/(.+)'] = 'Partner/edit_partner/$1';
$route['manage-partner'] = 'Partner/manage_partner';
$route['update-partner'] = 'Partner/update_partner';
$route['delete-partner/(.+)'] = 'Partner/delete_partner/$1';
$route['delete-comitee/(.+)'] = 'Comitee/delete_comitee/$1';
$route['manage-comitee'] = 'Comitee/manage_comitee';
$route['edit-comitee/(.+)'] = 'Comitee/edit_comitee/$1';
$route['update-comitee'] = 'Comitee/update_comitee';
$route['edit-member/(.+)'] = 'Member/edit_member/$1';
$route['manage-member'] = 'Member/manage_member';
$route['update-member'] = 'Member/update_member';
$route['delete-member/(.+)'] = 'Member/delete_member/$1';
$route['delete-report/(.+)'] = 'Report/delete_report/$1';
$route['manage-report'] = 'Report/manage_report';
$route['manage-govt'] = 'Govt/manage_govt';
$route['delete-govt/(.+)'] = 'Govt/delete_govt/$1';
$route['manage-market'] = 'Market/manage_market';
$route['delete-market/(.+)'] = 'Market/delete_market/$1';
$route['manage-gold'] = 'Gold/manage_gold';
$route['delete-gold/(.+)'] = 'Gold/delete_gold/$1';
/*
$arr = array(
    "product-management" => "adm_product_controller",
    "units-management" => "adm_units_controller"
);

foreach ($arr as $key => $value) {
    $route["{$key}"] = "{$value}";
    $route["{$key}/insert"] = "{$value}/insert";
    $route["{$key}/view"] = "{$value}/view";
    $route["{$key}/edit/(:num)"] = "{$value}/edit/$1";
    $route["{$key}/update"] = "{$value}/update";
    $route["{$key}/delete/(:num)"] = "{$value}/delete/$1";
} */



