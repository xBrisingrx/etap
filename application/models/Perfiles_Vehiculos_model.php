<?php 

class Perfiles_Vehiculos_model extends CI_Model {
  
// Tipo perfil: 1 para personal 2 para vehiculos
  public $table = 'perfiles_vehiculos';

  public function __construct()
  {
    parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		return $this->db->get_where($this->table, array($attr => $valor, 'activo' => true))->result();
  	} else 
    	{
        return $this->db->get_where($this->table, array('activo' => true))->result();
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
