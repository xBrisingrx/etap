<?php 

class Perfiles_Personas_model extends CI_Model {
  
// Tipo perfil: 1 para personal 2 para vehiculos
  public $table = 'perfiles_personas';

  public function __construct()
  {
    parent::__construct();
    $this->table = 'perfiles_personas';
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		return $this->db->get_where($this->table, array($attr => $valor, 'activo' => true))->result();
  	} else 
    	{
        $this->db->select('personas.nombre as nombre_persona, personas.apellido as apellido_persona, 
                           personas.dni, personas.cuil, perfiles.nombre as nombre_perfil, 
                           perfiles_personas.fecha_inicio_vigencia, perfiles_personas.update_at,
                           perfiles_personas.activo, perfiles_personas.id')
                      ->from('perfiles_personas')
                        ->join('personas', 'personas.id = perfiles_personas.persona_id')
                        ->join('perfiles', 'perfiles.id = perfiles_personas.perfil_id')
                          ->where('perfiles_personas.activo' = true);
        return $this->db->get()->result();
    	}
  }


  public function insert_entry($entry)
  {
  	return $this->db->insert($this->table, $entry);
  }

  public function update_entry($id, $entry)
  {
    $this->db->where('id', $id);
    return $this->db->update($this->table, $entry);
  }

  public function destroy($id)
  {
      $entry = $this->db->get_where($this->table, array('id' => $id))->row();
      $entry->activo = false;
      $entry->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update($this->table, $entry);
  }

}
