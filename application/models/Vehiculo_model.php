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

  public function destroy($table, $id)
  {
      $query = $this->db->get_where($table, array('id' => $id))->row();
      $query->activo = false;
      $query->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update($table, $query);
  }

  public function destroy_marca($id)
  {
    $this->db->trans_start();
    $this->db->query('UPDATE modelos_vehiculos SET activo = 0 WHERE marca_vehiculo_id = '.$id);
    $this->db->query('UPDATE marcas_vehiculos SET activo = 0 WHERE id = '.$id);
    $this->db->trans_complete();

    if ($this->db->trans_status() == FALSE)
      {
        $this->db->trans_rollback();
        return false;
      } else {
        $this->db->trans_commit();
        return true;
      }
  }

  public function modelo_vehiculo_unico($name)
  {
    // Si retorna 0 es que el valor no se encuentra en la BD
    $this->db->select('*')
                ->from('modelos_vehiculos')
                  ->join('marcas_vehiculos', 'marcas_vehiculos.id = modelos_vehiculos.marca_vehiculo_id');
    return ($this->db->get()->num_rows() == 0);
  }


  /* ===================== Operaciones de attr ==========================
  =======================================================================
  ======================================================================= */

  public function get_attr($table, $attr = null, $value = null)
  {
    if ($attr != null and $value != null) {
      return $this->db->get_where($table, array($attr => $value, 'activo' => 1))->result();
    } else {
        if ($table == 'modelos_vehiculos') {
          $this->db->select('modelos_vehiculos.id AS id, modelos_vehiculos.nombre as nombre,marcas_vehiculos.nombre as nombre_marca')
                      ->from($table)
                        ->join('marcas_vehiculos', 'marcas_vehiculos.id = modelos_vehiculos.marca_vehiculo_id')
                          ->where('modelos_vehiculos.activo', true);
          return $this->db->get()->result();
        } else {
        return $this->db->get_where($table, array('activo' => 1))->result();
      }
    }
  }


}
