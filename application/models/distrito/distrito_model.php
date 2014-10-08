<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Distrito_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getByProvincia($provinciaid){
			$this->db->where('provinciaid',$provinciaid);
			$query = $this->db->get('tb_distrito');
			return $query->result();
		}
		function getAll(){
			$query = $this->db->get('tb_distrito');
			return $query->result();
		}
	}
?>