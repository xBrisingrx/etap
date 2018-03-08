<?php 

class Vehiculo_model extends CI_Model {

  public function __construct()
  {
          parent::__construct();
  }

  public function get($attr = null, $value = null)
  {
  	if($attr != null and $value != null)
  	{
  		$query = $this->db->get_where('personas', array($attr => $value));
      if ($query->num_rows() == 1 ) {
        return $query->row();
      } else {
        return $query->result();
      }
  	} else 
    	{
    		return $this->db->get('personas')->result();
    	}
  }


  public function insert_entry($table, $value)
  {
  	return $this->db->insert($table, $value);
  }

  public function update_entry($table, $id, $value)
  {
    $this->db->where('id', $id);
    return $this->db->update($table, $value);
  }

  public function destroy($id)
  {
      $persona = $this->db->get_where('personas', array('id' => $id))->row();
      $persona->activo = false;
      $persona->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update('personas', $persona);
  }


  /* ===================== Operaciones de attr ==========================
  =======================================================================
  ======================================================================= */

  public function get_attr($table, $attr = null, $value = null)
  {
    if ($attr != null and $value != null) {
      return $this->db->get_where($table, array($attr => $value))->result();
    } else {
        if ($table == 'modelos_vehiculos') {
          $this->db->select('modelos_vehiculos.id AS id, modelos_vehiculos.nombre as nombre,marcas_vehiculos.nombre as nombre_marca')
                      ->from($table)
                        ->join('marcas_vehiculos', 'marcas_vehiculos.id = modelos_vehiculos.marca_vehiculo_id');
          return $this->db->get()->result();
        } else {
        return $this->db->get($table)->result();
      }
    }
  }


}
