<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Usuario_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		function getAll(){
			$this->db->select('*');
			$this->db->from('tb_usuario');
			$query = $this->db->get();
			return $query->result();
		}
		function get($usuarioid){
			$this->db->where('usuarioid',$usuarioid);
			$query = $this->db->get('tb_usuario');
			if($query)
				return $query->row();
			else
				return NULL;
		}
		function add($usuario){
			if($this->db->insert('tb_usuario',$usuario)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		function delete($usuarioid){
				
			$this->db->where('usuarioid',$usuarioid);
			if($this->db->delete('tb_usuario')){
				return true;
			}
			else{
				return false;
			}
		}
		function update($usuarioid, $usuario){
			$this->db->where('usuarioid',$usuarioid);
			if($this->db->update('tb_usuario',$usuario)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}

		function comprobar($nombre){
			$this->db->where('usuario',$nombre);
			return $this->db->get('tb_usuario')->row();
		}
    }
?>