<?php 

class Tipo_vehiculo_model extends CI_Model {

  public function __construct()
  {
          parent::__construct();
  }

  public function get($attr = null, $valor = null)
  {
  	if($attr != null and $valor != null)
  	{
  		$query = $this->db->get_where('personas', array($attr => $valor));
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


  public function insert_entry($persona)
  {
  	return $this->db->insert('personas', $persona);
  }

  public function update_entry($id, $persona)
  {
    $this->db->where('id', $id);
    return $this->db->update('personas', $persona);
  }

  public function destroy($id)
  {
      $persona = $this->db->get_where('personas', array('id' => $id))->row();
      $persona->activo = false;
      $persona->update_at = date('Y-m-d H:i:s');

      $this->db->where('id', $id);
      return $this->db->update('personas', $persona);
  }

}
