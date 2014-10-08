<?php
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Departamento extends CI_Controller {
		function __construct() {
        	parent::__construct();
        	$this->load->model('provincia/provincia_model');
    	}

    	function getProvinciaByDepartamento(){
    		$query=$this->provincia_model->getByDepartamento($this->input->post('departamentoid'));
    		echo json_encode($query);
    	}
	}
?>