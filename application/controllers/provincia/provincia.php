<?php
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Provincia extends CI_Controller {
		function __construct() {
        	parent::__construct();
            $this->load->model('distrito/distrito_model');
        	$this->load->model('provincia/provincia_model');
    	}

    	function getDistritoByProvincia(){
    		$query=$this->distrito_model->getByProvincia($this->input->post('provinciaid'));
    		echo json_encode($query);
    	}
        function getAll(){
            $query=$this->provincia_model->getAll();
            echo json_encode($query);
        }
	}
?>