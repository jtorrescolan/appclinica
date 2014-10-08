<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Provincia_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getByDepartamento($departamentoid){
			$this->db->where('departamentoid',$departamentoid);
			$query = $this->db->get('tb_provincia');
			return $query->result();
		}
		function getAll(){
			$query=$this->db->get('tb_provincia');
			return $query->result();
		}
	}
?>