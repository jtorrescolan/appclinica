<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Usuario extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('medico/medico_model');
			$this->load->model('usuario/usuario_model');
			$this->load->model('persona/persona_model');
			$this->load->library('Datatables');
    	}
		
		function report(){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$this->html2pdf->folder('./files/pdfs/usuario/');
			$this->html2pdf->filename('usuarios.pdf');
			$this->html2pdf->paper('a4','portrait');
			$usuario['usuarios'] = $this->usuario_model->getAll();
			$this->html2pdf->html(utf8_decode($this->load->view('usuario/usuario_view_report',$usuario,TRUE)));
			
			if($this->html2pdf->create('save')){
				if(is_dir("./files/pdfs/usuario"))
        		{
            		$filename = "usuarios.pdf"; 
            		$route = base_url("files/pdfs/usuario/usuarios.pdf"); 
            		if(file_exists("./files/pdfs/usuario/".$filename))
            		{
                		header('Content-type: application/pdf'); 
                		readfile($route);
            		}	
        		}
			}
		}

		function datatable()
		{
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$this->datatables->select("usuarioid,usuario,nombcompleto,tipousuario")
							 ->from('tb_usuario')
							 ->unset_column('usuarioid')
							 ->add_column('editar', '<center><a href="/actualizar-usuario/$1"><img src="' . IMG . 'edit.png" /></a></center>', 'usuarioid')
							 ->add_column('eliminar', '<center><a id=eliminar url="/eliminar-usuario/$1"><img src="' . IMG . 'trash.png" /></a></center>', 'usuarioid');
			echo $this->datatables->generate();
		}
		
		function addOrUpdate(){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			if($this->input->post('hdnusuarioid')==NULL){
				if($this->usuario_model->comprobar($this->input->post('txtusuario'))!=NULL){
            		$this->session->set_flashdata('mensaje_a','No se puede guardar el usuario, ya existe.');
            		redirect(base_url().'agregar-usuario','refresh');
            	}
				$usuario = array(
							'usuario'=>($this->input->post('txtusuario')!=NULL)?$this->input->post('txtusuario'):NULL,
							'contrasenia'=>($this->input->post('txtcontrasenia')!=NULL)?$this->encrypt->encode($this->input->post('txtcontrasenia')):NULL,
							'tipousuario'=>($this->input->post('list_tipousuario')!=NULL)?$this->input->post('list_tipousuario'):NULL);
				$this->usuario_model->add($usuario);
				$this->session->set_flashdata('mensaje_s','Registro guardado satisfactoriamente');
				redirect(base_url().'listado-usuario','refresh');
			}
			else{
				$usuarioid = $this->input->post('hdnusuarioid');
				$usuario = array(
							'usuario'=>$this->input->post('txtusuario'),
							'contrasenia'=>$this->encrypt->encode($this->input->post('txtcontrasenia')),
							'tipousuario'=>$this->input->post('list_tipousuario'));
				$this->usuario_model->update($usuarioid,$usuario);
				$this->session->set_flashdata('mensaje_s','Registro actualizado satisfactoriamente');
				redirect(base_url().'listado-usuario','refresh');
			}
			
		}
		
		function delete($usuarioid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
			$valor=$this->usuario_model->delete($usuarioid);
			if($valor){
				$this->session->set_flashdata('mensaje_s','Registro eliminado satisfactoriamente');
			}else{
				$this->session->set_flashdata('mensaje_a','No se puede eliminar un registro asociado');
			}
			redirect(base_url().'listado-usuario','refresh');
		}
		
		function get($usuarioid){
			if ($this->session->userdata['is_logued_in'] == FALSE) {
            	redirect(base_url() . 'iniciar-sesion');
        	}
            if($this->usuario_model->get($usuarioid)!=NULL){
            	$datos = array('usuario'=>$this->usuario_model->get($usuarioid));
				$data=array('titulo'=>'Agregar Usuario',
                        	'contenido'=>$this->load->view('usuario/usuario_view',$datos,TRUE));
				$this->load->view('home/home_view',$data);
            }else{
            	redirect(base_url().'listado-usuario');
            }
		}
    }
?>