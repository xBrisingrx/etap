<?php 

class Perfiles_Atributos_model extends CI_Model {
  
// Tipo perfil: 1 para personal 2 para vehiculos

  public function __construct()
  {
    parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		$query = $this->db->query("SELECT perfiles_atributos.id, perfiles.id as profile_id, atributos.id as attribute_id, 
                                perfiles.nombre as nombre_perfil, atributos.nombre as nombre_atributo, 
                                perfiles_atributos.update_at, perfiles_atributos.fecha_inicio_vigencia, perfiles_atributos.activo,
                                perfiles_atributos.tipo 
                                FROM perfiles_atributos 
                                  join perfiles on perfiles_atributos.perfil_id=perfiles.id 
                                  join atributos on perfiles_atributos.atributo_id=atributos.id
                                    where (perfiles_atributos.".$attr." = '".$valor."')");
      if ($query->num_rows() == 1 ) {
        return $query->row();
      } else {
        return $query->result();
      }
  	} else 
    	{
    		return $this->db->get('perfiles_atributos')->result();
    	}
  }


  public function insert_entry($perfil_atributo)
  {
  	return $this->db->insert('perfiles_atributos', $perfil_atributo);
  }

  public function update_entry($id, $perfil)
  {
    $this->db->where('id', $id);
    return $this->db->update('perfiles_atributos', $perfil);
  }

  public function destroy($id)
  {
      $perfil = $this->db->get_where('perfiles_atributos', array('id' => $id))->row();
      $perfil->activo = false;
      $perfil->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update('perfiles_atributos', $perfil);
  }

}
