<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Paciente extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('paciente/paciente_model');
			$this->load->model('paciente/historia_clinica_model');
			$this->load->model('paciente/enfermedad_model');
			$this->load->model('informe/informe_model');
			$this->load->model('ecografia/ecografia_model');
			$this->load->model('rayosx/rayosx_model');
			$this->load->model('estadoCivil/estado_civil_model');
			$this->load->library('Datatables');
    	}
		
		function report(){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$this->html2pdf->folder('./files/pdfs/paciente/');
			$this->html2pdf->filename('historia_clinica.pdf');
			$this->html2pdf->paper('legal','portrait');
			$pacienteid = $this->uri->segment(4);
			$histo = $this->historia_clinica_model->get($pacienteid);
			if($this->paciente_model->get($pacienteid)==NULL){
				redirect(base_url().'listar-paciente');
			}
			$paciente['paciente'] = $this->paciente_model->get($pacienteid);
			$paciente['historia'] = $this->historia_clinica_model->get($pacienteid);
			$paciente['enfermedad'] = $this->enfermedad_model->getAll($histo->historiaclinicaid);
			$this->html2pdf->html(utf8_decode($this->load->view('paciente/paciente_view_report',$paciente,TRUE)));
			
			if($this->html2pdf->create('save')){
				if(is_dir("./files/pdfs/paciente"))
        		{
            		$filename = "historia_clinica.pdf"; 
            		$route = base_url("files/pdfs/paciente/historia_clinica.pdf"); 
            		if(file_exists("./files/pdfs/paciente/".$filename))
            		{
                		header('Content-type: application/pdf'); 
                		readfile($route);
            		}	
        		}
			}
		}

		function addOrUpdate(){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			if($this->input->post('hdnpacienteid')==NULL){
				$paciente = array(
							'nombre'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapePaterno'),
							'apematerno'=>$this->input->post('txtapeMaterno'),
							'nomcompleto'=>$this->input->post('txtnombre').' '.$this->input->post('txtapePaterno').' '.$this->input->post('txtapeMaterno'),
							'estadocivilid'=>$this->input->post('list_estado'),
							'edad'=>$this->input->post('txtedad'),
							'ocupacion'=>$this->input->post('txtocupacion'),
							'lugarnac'=>$this->input->post('txtLugarNac'),
							'lugarproc'=>$this->input->post('txtLugaProc'),
							'domicilio'=>$this->input->post('txtdomicilio'),
							'telefono'=>$this->input->post('txttelefono'),
							'celular'=>$this->input->post('txtcelular'),
							'estado'=>'A');
				$pacienteid=$this->paciente_model->add($paciente);
				$historiaclinica = array('pacienteid'=>$pacienteid);
				$this->historia_clinica_model->add($historiaclinica);
				$this->session->set_flashdata('mensaje','Registro guardado satisfactoriamente');
				redirect(base_url().'listar-paciente','refresh');
			}
			else{
				$pacienteid = $this->input->post('hdnpacienteid');
				$historiaclinicaid = $this->input->post('hdnhistoriaclinicaid');
				$paciente = array(
							'nombre'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapePaterno'),
							'apematerno'=>$this->input->post('txtapeMaterno'),
							'nomcompleto'=>$this->input->post('txtnombre').' '.$this->input->post('txtapePaterno').' '.$this->input->post('txtapeMaterno'),
							'estadocivilid'=>$this->input->post('list_estado'),
							'edad'=>$this->input->post('txtedad'),
							'ocupacion'=>$this->input->post('txtocupacion'),
							'lugarnac'=>$this->input->post('txtLugarNac'),
							'lugarproc'=>$this->input->post('txtLugaProc'),
							'domicilio'=>$this->input->post('txtdomicilio'),
							'telefono'=>$this->input->post('txttelefono'),
							'celular'=>$this->input->post('txtcelular'));
				$this->paciente_model->update($pacienteid,$paciente);
				$historiaclinica = array('medicos'=>$this->input->post('txtmedicos'),
										 'quirurgicos'=>$this->input->post('txtquirurgicos'),
										 'alergicos'=>$this->input->post('txtalergicos'),
										 'fur'=>$this->input->post('txtfur'),
										 'menarquia'=>$this->input->post('txtmenarquia'),
										 'rs'=>$this->input->post('txtrs'),
										 'rc'=>$this->input->post('txtrc'),
										 'g'=>$this->input->post('txtg'),
										 'p'=>$this->input->post('txtp'),
										 'ma'=>$this->input->post('txtma'),
										 'hospitalizacion'=>$this->input->post('txthospitalizacion'),
										 'habitosnocivos'=>$this->input->post('txthnocivos'),
										 'pacienteid'=>$pacienteid);
				$this->historia_clinica_model->update($historiaclinicaid,$historiaclinica);
				$this->session->set_flashdata('mensaje','Registro actualizado satisfactoriamente');
				redirect(base_url().'listar-paciente','refresh');
			}
		}
		
		function delete($pacienteid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$paciente = array('estado'=>'D');
			if($this->paciente_model->delete($pacienteid,$paciente))
				$this->session->set_flashdata('mensaje','Registro eliminado satisfactoriamente');
			else
				$this->session->set_flashdata('mensaje_a','No se pudo eliminar el registro');
			redirect(base_url().'listar-paciente','refresh');
		}
		
		function autocomplete($letra){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$row = $this->paciente_model->get_like($letra);
			echo json_encode($row);
		}
		
		function get($pacienteid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
            if($this->paciente_model->get($pacienteid)!=NULL){
            	$datosAnamnesis = array('paciente'=>$this->paciente_model->get($pacienteid),
						   				'estadocivil'=>$this->estado_civil_model->getAll());
			    $tab = array('anamnesis'=>$this->load->view('paciente/paciente_view_anamnesis',$datosAnamnesis,TRUE));
				$data=array('titulo'=>'Actualizar Paciente',
	                        'contenido'=>$this->load->view('paciente/paciente_view',$tab,TRUE));
				$this->load->view('home/home_view',$data);
            }
            else{
            	redirect(base_url().'listar-paciente');
            }
		}

		/*function datatable(){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$this->datatables->select("pacienteid,nomcompleto,edad,domicilio,telefono")
							 ->from('tb_paciente')
							 ->where('estado','A')
							 ->unset_column('pacienteid')
							 ->add_column('editar', '<center><a href="/actualizar-paciente/$1"><i class="glyphicon glyphicon-pencil"></i></a></center>', 'pacienteid')
							 ->add_column('historia', '<center><a href="/actualizar-historia/$1"><i class="glyphicon glyphicon-book"></i></a></center>', 'pacienteid')
							 ->add_column('eliminar', '<center><a id=eliminar url="' . base_url() . 'eliminar-paciente/$1"><i class="glyphicon glyphicon-remove"></i></a></center>', 'pacienteid')
							 ->add_column('reporte', '<center><a target="_blank" href="' . base_url() . 'paciente/paciente/report/$1"><i class="glyphicon glyphicon-list-alt"></i></a></center>', 'pacienteid');

			echo $this->datatables->generate();
		}*/

		public function getEnfermedad($historiaclinicaid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$options['historiaid']=$historiaclinicaid;
			$this->load->view('paciente/paciente_view_enfermedad_form',$options);
		}

		public function getListaEnfermedad($historiaid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$options['diagnosticos']=$this->enfermedad_model->getAll($historiaid);
			$this->load->view('paciente/paciente_view_enfermedad',$options);	
		} 
		public function getListaInforme($historiaclinicaid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$options['informes']=$this->informe_model->getAll($historiaclinicaid);
			$this->load->view('paciente/paciente_view_informe',$options);
		}
		public function get_paciente($nombrepaciente){
			$sw=$this->paciente_model->get_paciente(str_replace('%20',' ',$nombrepaciente));
			$json=array();
			if($sw){
				$json[] = array('success'=>TRUE);
			}
			else{
				$json[] = array('success'=>FALSE);	
			}
			echo json_encode($json);
		}
    }
?>