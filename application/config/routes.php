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

$route['default_controller'] = "login/login";
$route['iniciar-sesion'] = "login/login";
$route['login'] = "login/login/log_in";
$route['logout'] ="login/login/log_out";
$route['home'] = "home/home";
$route['agregar-paciente'] = "home/home/formPaciente";
$route['listar-paciente'] = "home/home/formListarPaciente";
$route['actualizar-historia/(:num)'] = "home/home/formHistoriaClinica/$1";
$route['ver-pacientes']="paciente/paciente/datatable";
$route['guardar-paciente']="paciente/paciente/addOrUpdate";
$route['buscar-paciente/(:any)']='paciente/paciente/autocomplete/$1';
$route['actualizar-paciente/(:num)'] = "paciente/paciente/get/$1";
$route['eliminar-paciente/(:num)'] = "paciente/paciente/delete/$1";
$route['agregar-enfermedad'] = "paciente/enfermedad/addOrUpdate";
$route['editar-enfermedad/(:num)'] = "paciente/enfermedad/get/$1";
$route['subir-ecografia'] = "ecografia/ecografia/uploadEcografia";
$route['eliminar-ecografia/(:num)/(:num)/(:any)'] = "ecografia/ecografia/delete/$1/$2/$3";
$route['subir-informe'] = "paciente/informe/uploadInforme";
$route['eliminar-informe/(:num)/(:num)/(:any)'] = "paciente/informe/delete/$1/$2/$3";
$route['listar-informe/(:num)'] = "paciente/informe/datatable/$1";
$route['subir-rayosx'] = "rayosx/rayosx/uploadRayosx";
$route['eliminar-rayosx/(:num)/(:num)/(:any)'] = "rayosx/rayosx/delete/$1/$2/$3";
$route['agregar-usuario'] = "home/home/formUsuario";
$route['listado-usuario'] = "home/home/formListarUsuario";
$route['guardar-usuario'] = "usuario/usuario/addOrUpdate";
$route['actualizar-usuario/(:num)'] = "usuario/usuario/get/$1";
$route['eliminar-usuario/(:num)'] = "usuario/usuario/delete/$1";
$route['agregar-medico'] = "home/home/formMedico";
$route['guardar-medico'] = "medico/medico/addOrUpdate";
$route['actualizar-medico/(:num)'] = "medico/medico/get/$1";
$route['eliminar_medico/(:num)/(:num)'] = "medico/medico/delete/$1/$2";
$route['listar-medico'] = "home/home/formListarMedico";
$route['ver-medico'] = "medico/medico/datatable";
$route['agregar-secretaria'] = "home/home/formSecretaria";
$route['guardar-secretaria'] = "secretaria/secretaria/addOrUpdate";
$route['listar-secretaria'] = "home/home/formListarSecretaria";
$route['ver-secretaria']='secretaria/secretaria/datatable';
$route['actualizar_secretaria/(:num)'] = "secretaria/secretaria/get/$1";
$route['eliminar_secretaria/(:num)/(:num)'] = "secretaria/secretaria/delete/$1/$2";
$route['calendario-citas'] = "home/home/cita_medica";
$route['agregar-cita'] = "cita/cita/addOrUpdate";
$route['buscar-cita'] = "cita/cita/autocomplete";
$route['listar-cita'] = "cita/cita/getAll";
$route['eliminar-cita/(:num)'] = "cita/cita/delete/$1";
$route['mover-cita/(:num)/(:any)/(:any)'] = "cita/cita/move/$1/$2/$3";
$route['agrandar-cita/(:num)/(:any)'] = "cita/cita/resize/$1/$2/";
$route['lista-por-especialidad']="medico/medico/getByEspecialidad";
$route['lista-por-departamento']="departamento/departamento/getProvinciaByDepartamento";
$route['lista-por-provincia']="provincia/provincia/getDistritoByProvincia";
$route['lista-provincia']="provincia/provincia/getAll";
$route['buscar-dni/(:num)']="secretaria/secretaria/buscar_dni/$1";
$route['buscar-paciente-existe/(:any)']="paciente/paciente/get_paciente/$1";
$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */