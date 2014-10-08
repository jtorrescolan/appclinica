<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Departamento_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getAll(){
			$query = $this->db->get('tb_departamento');
			return $query->result();
		}
	}
?>