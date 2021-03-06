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
  		$query = $this->db->get_where('vehiculos', array($attr => $value, 'activo' => true));
      if ($query->num_rows() == 1 ) {
        return $query->row();
      } else {
        return $query->result();
      }
  	} else 
    	{
    		$this->db->select('vehiculos.id,vehiculos.interno, vehiculos.dominio, vehiculos.anio,marcas_vehiculos.nombre as marca, 
                           modelos_vehiculos.nombre as modelo, tipos_vehiculos.nombre as tipo, vehiculos.n_chasis, 
                           vehiculos.n_motor, vehiculos.cant_asientos, empresas.nombre as empresa, vehiculos.observaciones')
                    ->from('vehiculos')
                      ->join('marcas_vehiculos', 'marcas_vehiculos.id = vehiculos.marca_id')
                      ->join('modelos_vehiculos', 'modelos_vehiculos.id = vehiculos.modelo_id')
                      ->join('tipos_vehiculos', 'tipos_vehiculos.id = vehiculos.tipo_id')
                      ->join('empresas', 'empresas.id = vehiculos.empresa_id')
                        ->where('vehiculos.activo', true);
        return $this->db->get()->result();
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

  public function modelo_vehiculo_unico($marca_id,$name)
  {
    // Si retorna 0 es que el valor no se encuentra en la BD
    $query = $this->db->select('*')
                ->from('modelos_vehiculos')
                  ->join('marcas_vehiculos', 'marcas_vehiculos.id = modelos_vehiculos.marca_vehiculo_id')
                    ->where(array('modelos_vehiculos.nombre' => $name, 'modelos_vehiculos.marca_vehiculo_id' => $marca_id))
                      ->get();
                    // ->where('modelos_vehiculos.marca_vehiculo_id = "'.$marca_id.'"');
    if ( $query->num_rows() > 0 ) {
      // Se encuentro en la BD
      return false;
    } else {
      return true;
    }
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
