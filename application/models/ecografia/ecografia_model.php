<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Ecografia_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function subir($ecografia){
            $this->db->insert('tb_ecografia',$ecografia);
        }
        public function update($ecografia,$ecografiaid){
            $this->db->where('ecografiaid',$ecografiaid);
            $this->db->update('tb_ecografia',$ecografia);
        }
        /*public function get($historia){
            $this->db->where('historiaclinicaid',$historia);
            $query=$this->db->get('tb_ecografia');
            return $query->result();
        }*/
        public function get($historia){
            $this->db->select('ecografiaid,tb_ecografia.nombre,fecha,tipo,tb_ecografia.historiaclinicaid,tb_historiaclinica.pacienteid');
            $this->db->from('tb_ecografia');
            $this->db->join('tb_historiaclinica','tb_historiaclinica.historiaclinicaid=tb_ecografia.historiaclinicaid');
            $this->db->join('tb_paciente','tb_paciente.pacienteid=tb_historiaclinica.pacienteid');
            $this->db->where('tb_ecografia.historiaclinicaid',$historia);
            $query = $this->db->get();
            return $query;
        }
        public function delete($ecografiaid){
            $this->db->where('ecografiaid',$ecografiaid);
            if($this->db->delete('tb_ecografia')){
                return true;
            }
            else{
                return false;
            }
        }
        public function comprobar($nombre,$extension,$id){
            $this->db->select('ecografiaid,nombre,tipo');
            $this->db->where('nombre',$nombre);
            $this->db->where('tipo',$extension);
            $this->db->where('historiaclinicaid',$id);
            $query = $this->db->get('tb_ecografia');
            return $query->row();
        }
    }
?>