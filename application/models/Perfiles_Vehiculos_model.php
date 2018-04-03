<?php 

class Perfiles_Vehiculos_model extends CI_Model {
  
// Tipo perfil: 1 para vehiculol 2 para vehiculos
  public $table = 'perfiles_vehiculos';

  public function __construct()
  {
    parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
    if($attr != null and $valor != null)
    {
      $this->db->select('perfiles_vehiculos.id, vehiculos.interno,  vehiculos.dominio,
                         perfiles.nombre as nombre_perfil')
                  ->from('perfiles_vehiculos')
                    ->join('vehiculos', 'vehiculos.id = perfiles_vehiculos.vehiculo_id')
                        ->join('perfiles', 'perfiles.id = perfiles_vehiculos.perfil_id')
                          ->where('perfiles_vehiculos.'.$attr, $valor)
                          ->where('perfiles_vehiculos.activo', TRUE);
        return $this->db->get()->row();
    } else 
      {
        $this->db->select('vehiculos.interno, vehiculos.dominio, vehiculos.anio, 
                           marcas_vehiculos.nombre as marca, modelos_vehiculos.nombre as modelo, 
                           perfiles.nombre as nombre_perfil, perfiles_vehiculos.fecha_inicio_vigencia, 
                           perfiles_vehiculos.update_at, perfiles_vehiculos.activo, perfiles_vehiculos.id')
                      ->from('perfiles_vehiculos')
                        ->join('vehiculos', 'vehiculos.id = perfiles_vehiculos.vehiculo_id')
                        ->join('perfiles', 'perfiles.id = perfiles_vehiculos.perfil_id')
                        ->join('marcas_vehiculos', 'marcas_vehiculos.id = vehiculos.marca_id')
                        ->join('modelos_vehiculos', 'modelos_vehiculos.id = vehiculos.modelo_id')
                          ->where('perfiles_vehiculos.activo', TRUE);
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
