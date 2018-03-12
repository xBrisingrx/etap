<?php 

class Perfil_model extends CI_Model {
  
// Tipo perfil: 1 para personal 2 para vehiculos

  public function __construct()
  {
    parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		$query = $this->db->get_where('perfiles', array($attr => $valor, 'activo' => true));
      if ($query->num_rows() == 1 ) {
        return $query->row();
      } else {
        return $query->result();
      }
  	} else 
    	{
    		return $this->db->get('perfiles')->result();
    	}
  }


  public function insert_entry($perfil)
  {
  	return $this->db->insert('perfiles', $perfil);
  }

  public function update_entry($id, $perfil)
  {
    $this->db->where('id', $id);
    return $this->db->update('perfiles', $perfil);
  }

  public function destroy($id)
  {
      $perfil = $this->db->get_where('perfiles', array('id' => $id))->row();
      $perfil->activo = false;
      $perfil->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update('perfiles', $perfil);
  }

}
