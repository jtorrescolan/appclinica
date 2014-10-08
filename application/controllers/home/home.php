<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('medico/medico_model');
		$this->load->model('secretaria/secretaria_model');
        $this->load->model('persona/persona_model');
        $this->load->model('usuario/usuario_model');
        $this->load->model('paciente/paciente_model');
        $this->load->model('departamento/departamento_model');
        $this->load->model('ecografia/ecografia_model');
        $this->load->model('paciente/historia_clinica_model');
        $this->load->model('informe/informe_model');
        $this->load->model('ecografia/ecografia_model');
        $this->load->model('rayosx/rayosx_model');
        $this->load->model('paciente/enfermedad_model');
        $this->load->model('estadoCivil/estado_civil_model');
    }

    function index() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $data['contenido'] = $this->load->view('home/inicio_view','',TRUE);
        $data['titulo'] = 'Inicio';
        $this->load->view('home/home_view', $data);
    }
	
	function cita_medica(){
		if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $datos['especialidades']=$this->medico_model->getEspecialidad();
        $datos['titulo']='Cita';
		$data=array('contenido' => $this->load->view('cita/cita_view',$datos,TRUE));
		$this->load->view('home/home_view', $data);
	}

	function cita_medica_elegir(){
		if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $busqueda['especialidades']=$this->medico_model->getEspecialidad();
		$data=array('contenido' => $this->load->view('cita/cita_elegir_paciente',$busqueda,TRUE));
		$this->load->view('home/home_view', $data);
	}

    function cita_asignada(){
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico'){
            redirect(base_url().'home');
        }
        $data=array('contenido' => $this->load->view('cita/cita_view_asignada','',TRUE),
                    'titulo' => 'Ver citas asignadas');
        $this->load->view('home/home_view',$data);
    }

    function formPaciente() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico'){
            redirect(base_url().'home');
        }
        $estado_civil['estadocivil'] = $this->estado_civil_model->getAll();
        $tab = array('anamnesis' => $this->load->view('paciente/paciente_view_anamnesis', $estado_civil, TRUE));
        $data = array('titulo' => 'Agregar Paciente',
                      'contenido' => $this->load->view('paciente/paciente_view', $tab, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formListarPaciente() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $datos['pacientes']=$this->paciente_model->getAll();
        $data = array('titulo' => 'Listar Paciente',
                      'contenido' => $this->load->view('paciente/paciente_view_listar', $datos, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formHistoriaClinica($pacienteid){
        if($this->session->userdata['is_logued_in']==FALSE){
            redirect(base_url().'login');
        }
        if($this->paciente_model->get($pacienteid)!=NULL){
            $historia = $this->historia_clinica_model->get($pacienteid);
            $datosInforme = array('informes'=>$this->informe_model->getAll($historia->historiaclinicaid),
                                  'historiaclinicaid'=>$historia->historiaclinicaid);
            $datosDiagnostico = array('diagnosticos'=>$this->enfermedad_model->getAll($historia->historiaclinicaid));
            $datosHistoria = array('historia'=>$this->historia_clinica_model->get($pacienteid));
            $datosEcografia= array('ecografias' => $this->ecografia_model->get($historia->historiaclinicaid));
            $datosRayos= array('rayos' => $this->rayosx_model->get($historia->historiaclinicaid));
            $datosAnamnesis = array('paciente'=>$this->paciente_model->get($pacienteid),
                                    'antecedentes'=>$this->load->view('paciente/paciente_view_antecedentes',$datosHistoria,TRUE),
                                    'estadocivil'=>$this->estado_civil_model->getAll(),
                                    'valor'=>'readonly');
            $tab = array('anamnesis'=>$this->load->view('paciente/paciente_view_anamnesis',$datosAnamnesis,TRUE),
                         'enfermedad'=>$this->load->view('paciente/paciente_view_enfermedad',$datosDiagnostico,TRUE),
                         'informe'=>$this->load->view('paciente/paciente_view_informe',$datosInforme,TRUE),
                         'ecografia'=>$this->load->view('paciente/paciente_view_ecografia',$datosEcografia,TRUE),
                         'rayosx'=>$this->load->view('paciente/paciente_view_rayosx',$datosRayos,TRUE));
            $data=array('titulo'=>'Actualizar Historia',
                        'contenido'=>$this->load->view('paciente/paciente_view',$tab,TRUE));
            $this->load->view('home/home_view',$data);
        }
        else{
            redirect(base_url().'listar-paciente');
        }
    }

    function formUsuario() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico' || $this->session->userdata['tipousuario']=='secretaria'){
            redirect(base_url().'home');
        }
        $persona['personas'] = $this->persona_model->getAll();
        $data = array('titulo' => 'Agregar Usuario',
            'contenido' => $this->load->view('usuario/usuario_view', $persona, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formListarUsuario() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico' || $this->session->userdata['tipousuario']=='secretaria'){
            redirect(base_url().'home');
        }
        $usuario['usuarios'] = $this->usuario_model->getAll();
        $data = array('titulo' => 'Listado de Usuarios',
                      'contenido' => $this->load->view('usuario/usuario_view_listar', $usuario, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formMedico() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico' || $this->session->userdata['tipousuario']=='secretaria'){
            redirect(base_url().'home');
        }
        $estado_civil['departamentos'] = $this->departamento_model->getAll();
        $estado_civil['estadocivil'] = $this->estado_civil_model->getAll();
        $data = array('titulo' => 'Agregar Doctor',
                      'contenido' => $this->load->view('medico/medico_view', $estado_civil, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formListarMedico() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $data = array('titulo' => 'Listado de Doctores',
                      'contenido' => $this->load->view('medico/medico_view_list', '', TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formSecretaria() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        if($this->session->userdata['tipousuario']=='medico' || $this->session->userdata['tipousuario']=='secretaria'){
            redirect(base_url().'home');
        }
        $estado_civil['departamentos'] = $this->departamento_model->getAll();
        $estado_civil['estadocivil'] = $this->estado_civil_model->getAll();
        $data = array('titulo' => 'Agregar Secretaria',
                      'contenido' => $this->load->view('secretaria/secretaria_view', $estado_civil, TRUE));
        $this->load->view('home/home_view', $data);
    }

    function formListarSecretaria() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'iniciar-sesion');
        }
        $data = array('titulo' => 'Lista de Secretarias',
                      'contenido' => $this->load->view('secretaria/secretaria_view_list', '', TRUE));
        $this->load->view('home/home_view', $data);
    }
}
?>
