<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Medico_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }

		function getAll(){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$query = $this->db->get();
			return $query->result();
		}

		function getLike($letra){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->like('nombcompleto',$letra);
			$query = $this->db->get();
			return $query->result();
		}

		/*function get($medicoId){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->where('medicoid',$medicoId);
			$query = $this->db->get();
			return $query->row();
		}*/
		function get($medicoid){
			$query=$this->db->query("SELECT
									  tb_medico.medicoid,
									  tb_medico.especialidad,
									  tb_persona.personaid,
									  tb_persona.nombres,
									  tb_persona.apepaterno,
									  tb_persona.apematerno,
									  tb_persona.nombcompleto,
									  DATE_FORMAT(tb_persona.fechnacimiento,'%Y-%m-%d') as fechnacimiento,
									  tb_persona.domicilio,
									  tb_persona.telefono,
									  tb_persona.celular,
									  tb_persona.dni,
									  tb_distrito.distritoid,
									  tb_provincia.provinciaid,
									  tb_departamento.departamentoid,
									  tb_estadocivil.estadocivilid
									FROM
									  sysclinico.tb_distrito
									  INNER JOIN sysclinico.tb_provincia
									    ON tb_distrito.provinciaid = tb_provincia.provinciaid
									  INNER JOIN sysclinico.tb_departamento
									    ON tb_provincia.departamentoid = tb_departamento.departamentoid
									  INNER JOIN sysclinico.tb_persona
									    ON tb_persona.distritoid = tb_distrito.distritoid
									  INNER JOIN sysclinico.tb_medico
									    ON tb_medico.personaid = tb_persona.personaid
									  INNER JOIN sysclinico.tb_estadocivil
									    ON tb_persona.estadocivilid = tb_estadocivil.estadocivilid
									  WHERE tb_medico.medicoid=$medicoid");
			if($query){
				$q2=$query->row();
				$query->next_result();
				$query->free_result();
				return $q2;
			}
			else{

			}
		}
		/*function get($medicoid){
			$query=$this->db->query("call sp_lista_medico($medicoid)");
			$q2=$query->row();
			$query->next_result();
			$query->free_result();
			return $q2;
		}*/

		function getByEspecialidad($especialidad){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->where('especialidad', $especialidad);
			$query = $this->db->get();
			return $query->result();
		}

		function getEspecialidad(){
			$this->db->select('especialidad');
			$this->db->group_by('especialidad');
			$query = $this->db->get('tb_medico');
			return $query->result();
		}

		function add($medico){
			if($this->db->insert('tb_medico',$medico)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		function delete($medicoid, $personaid){
			$this->db->where('medicoid',$medicoid);
			if($this->db->delete('tb_medico')){
				$this->db->where('personaid', $personaid);
				$this->db->delete('tb_persona');
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		function update($medico,$medicoid){
			$this->db->where('medicoid',$medicoid);
			if($this->db->update('tb_medico',$medico)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
    }
?>