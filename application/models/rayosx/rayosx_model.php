<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Rayosx_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function subir($rayosx){
            $this->db->insert('tb_rayosx',$rayosx);
        }
        public function update($rayosx,$rayosxid){
            $this->db->where('rayosxid',$rayosxid);
            $this->db->update('tb_rayosx',$rayosx);
        }
        /*public function get($historia){
            $this->db->where('historiaclinicaid',$historia);
            $query=$this->db->get('tb_rayosx');
            return $query->result();
        }*/
        public function get($historia){
            $this->db->select('rayosxid,tb_rayosx.nombre,fecha,tipo,tb_rayosx.historiaclinicaid,tb_historiaclinica.pacienteid');
            $this->db->from('tb_rayosx');
            $this->db->join('tb_historiaclinica','tb_historiaclinica.historiaclinicaid=tb_rayosx.historiaclinicaid');
            $this->db->join('tb_paciente','tb_paciente.pacienteid=tb_historiaclinica.pacienteid');
            $this->db->where('tb_rayosx.historiaclinicaid',$historia);
            $query = $this->db->get();
            return $query;
        }
        public function delete($rayosxid){
            $this->db->where('rayosxid',$rayosxid);
            if($this->db->delete('tb_rayosx')){
                return true;
            }
            else{
                return false;
            }
        }
        public function comprobar($nombre,$extension,$id){
            $this->db->select('rayosxid,nombre,tipo');
            $this->db->where('nombre',$nombre);
            $this->db->where('tipo',$extension);
            $this->db->where('historiaclinicaid',$id);
            $query = $this->db->get('tb_rayosx');
            return $query->row();
        }
    }
?>