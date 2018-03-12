<?php 

class Atributo_model extends CI_Model {
  
// Tipo atributo: 1 para personal 2 para vehiculos

  public function __construct()
  {
    parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		$query = $this->db->get_where('atributos', array($attr => $valor, 'activo' => true));
      if ($query->num_rows() == 1 ) {
        return $query->row();
      } else {
        return $query->result();
      }
  	} else 
    	{
    		return $this->db->get('atributos')->result();
    	}
  }


  public function insert_entry($attribute)
  {
  	return $this->db->insert('atributos', $attribute);
  }

  public function update_entry($id, $perfil)
  {
    $this->db->where('id', $id);
    return $this->db->update('atributos', $perfil);
  }

  public function destroy($id)
  {
      $perfil = $this->db->get_where('atributos', array('id' => $id))->row();
      $perfil->activo = false;
      $perfil->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update('atributos', $perfil);
  }

}
