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
$route['default_controller']    = 'View_controller';
$route['404_override'] = '';
$route['translate_uri_dashes']  = FALSE;
$route['nosotros']              = 'View_controller/nosotros';
$route['terminos']              = 'View_controller/terminos';
$route['comercializacion']      = 'View_controller/comercializacion';
$route['contacto']              = 'View_controller/contacto';
$route['dashboard_view']        = 'View_controller/dashboard_view';
$route['productos']             = 'View_controller/productos';
/**Controlador usuarios */
$route['registrarse']           = 'Usuario_controller/registrarse';
$route['registrar']             = 'Usuario_controller/registrar';
/**Controlador Logueo */
$route['login']                 = 'Login_controller/login';
$route['ingresar']              = 'Login_controller/ingresar';
$route['logout']                = 'Login_controller/logout';
/**Controlaror Categorias */
$route['categorias']            = 'Categorias_controller/categorias';
$route['registrar_categoria']   = 'Categorias_controller/registrar_categoria';
/**Controlador Productos */
$route['cargar_productos']      = 'Productos_controller/cargar_productos';
$route['registrar_producto']    = 'Productos_controller/registrar_producto';
$route['editar_producto']       = 'Productos_controller/editar_producto';
$route['listado_productos']     = 'Productos_controller/listado_productos';
$route['editar_producto/(:num)']        = 'Productos_controller/editar_producto/$1';
$route['verifica_actualizar/(:num)']    = 'Productos_controller/verifica_actualizar/$1';
$route['eliminar_producto/(:num)']      = 'Productos_controller/eliminar_producto/$1';
$route['activar_producto/(:num)']       = 'Productos_controller/activar_producto/$1';
$route['mostrar_productos']      = 'Productos_controller/mostrar_productos';