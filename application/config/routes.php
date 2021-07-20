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
$route['default_controller']        = 'View_controller';
$route['404_override'] = '';
$route['translate_uri_dashes']      = FALSE;
$route['nosotros']                  = 'View_controller/nosotros';
$route['terminos']                  = 'View_controller/terminos';
$route['comercializacion']          = 'View_controller/comercializacion';
$route['dashboard']                 = 'View_controller/dashboard';

/**Controlador usuarios */
$route['registrarse']               = 'Usuario_controller/registrarse';
$route['registrar']                 = 'Usuario_controller/registrar';
$route['listado_usuarios']          = 'Usuario_controller/listado_usuarios';
$route['perfil']                    = 'Usuario_controller/perfil';
$route['verificar_perfil/(:num)']   = 'Usuario_controller/verificar_perfil/$1';
$route['editar_perfil/(:num)']      = 'Usuario_controller/editar_perfil/$1';
$route['eliminar_perfil/(:num)']    = 'Usuario_controller/eliminar_perfil/$1';
$route['modificado']                = 'Usuario_controller/modificado';

/**Controlador Logueo */
$route['login']                     = 'Login_controller/login';
$route['ingresar']                  = 'Login_controller/ingresar';
$route['logout']                    = 'Login_controller/logout';

/**Controlaror Categorias */
$route['categorias']                = 'Categorias_controller/categorias';
$route['registrar_categoria']       = 'Categorias_controller/registrar_categoria';
$route['listado_categorias']        = 'Categorias_controller/listado_categorias';
$route['editar_categoria/(:num)']   = 'Categorias_controller/editar_categoria/$1';
$route['verificar_editar/(:num)']   = 'Categorias_controller/verificar_editar/$1';
$route['eliminar_categoria/(:num)'] = 'Categorias_controller/eliminar_categoria/$1';
$route['activar_categoria/(:num)']  = 'Categorias_controller/activar_categoria/$1';
$route['gracias']                   = 'Categorias_controller/gracias';

/**Controlador Productos */
$route['productos']                 = 'Productos_controller/mostrar_productos';
$route['gracias']                   = 'Productos_controller/gracias';
$route['cargar_productos']          = 'Productos_controller/cargar_productos';
$route['registrar_producto']        = 'Productos_controller/registrar_producto';
$route['editar_producto']           = 'Productos_controller/editar_producto';
$route['listado_productos']         = 'Productos_controller/listado_productos';
$route['editar_producto/(:num)']    = 'Productos_controller/editar_producto/$1';
$route['verifica_actualizar/(:num)']= 'Productos_controller/verifica_actualizar/$1';
$route['eliminar_producto/(:num)']  = 'Productos_controller/eliminar_producto/$1';
$route['activar_producto/(:num)']   = 'Productos_controller/activar_producto/$1';
$route['mostrar_productos']         = 'Productos_controller/mostrar_productos';
$route['detalles_producto/(:num)']  = 'Productos_controller/detalles_producto/$1';

/**Controlador Consultas */
$route['contacto']                  = 'Consultas_controller/contacto';
$route['consultas/(:num)']          = 'Consultas_controller/consultas/$1';
$route['verificar_contacto']        = 'Consultas_controller/verificar_contacto';
$route['listado_consultas']         = 'Consultas_controller/listado_consultas';
$route['listado_consulta']          = 'Consultas_controller/listado_consulta';
$route['gracias']                   = 'Consultas_controller/gracias';
$route['verificar_consulta/(:num)'] = 'Consultas_controller/verificar_consulta/$1';

/**Controlador Carrito*/
$route['mostrar_carrito']           = 'Carrito_controller/mostrar_carrito';
$route['agregar']                   = 'Carrito_controller/agregar';
$route['actualizar_carrito']        = 'Carrito_controller/actualizar_carrito';
$route['eliminar_carrito']          = 'Carrito_controller/eliminar_carrito';
$route['quitar_carrito/(:any)']     = 'Carrito_controller/quitar_carrito/$1';
$route['finalizar_compra']          = 'Carrito_controller/finalizar_compra';
$route['comprar_carrito/(:num)']    = 'Carrito_controller/comprar_carrito/$1';
$route['confirma_compra']           = 'Carrito_controller/guarda_compra';
$route['verificar_compra']          = 'Carrito_controller/verificar_compra';
$route['compra_detalles']           = 'Carrito_controller/compra_detalles';