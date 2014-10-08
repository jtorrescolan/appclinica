<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Informe_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function save($informe){
            $this->db->insert('tb_informe',$informe);
        }
        public function update($informe,$informeid){
            $this->db->where('informeid',$informeid);
            $this->db->update('tb_informe',$informe);
        }
        public function getAll($historia){
            $this->db->where('historiaclinicaid',$historia);
            $query=$this->db->get('tb_informe');
            return $query->result();
        }
        public function get($informeid){
            $this->db->where('informeid',$informeid);
            return $this->db->get('tb_informe')->row();
        }
        public function delete($informeid){
            $this->db->where('informeid',$informeid);
            if($this->db->delete('tb_informe'))
                return true;
            else
                return false;
        }
        public function comprobar($nombre,$extension,$id){
            $this->db->select('informeid,nombre,tipo');
            $this->db->where('nombre',$nombre);
            $this->db->where('tipo',$extension);
            $this->db->where('historiaclinicaid',$id);
            $query = $this->db->get('tb_informe');
            return $query->row();
        }
    }
?>