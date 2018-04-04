<?php 
class Usuarios_model extends CI_Model {

  public function __construct()
  {
          parent::__construct();
  }

	// ====== Existe usuario
	public function existe($email)
	{	
		$this->db->where('email', $email);
		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	// ===== Verificar que los datos sean correctos
	public function datosCorrectos($usuario)
	{	
		$pass = $usuario['password'];

		$correcto = false;
		if ($this->existe($usuario['nombre_usuario'])) {

			$query = $this->db->get_where('usuarios', array('nombre_usuario' => $usuario));

			$correcto = $query->num_rows() == 1;
		}
		return $correcto;
	}

	// ======= Obtener todos los datos del usuario
	public function get($usuario)
	{
		$query = $this->db->get_where('usuarios', array('nombre_usuario' => $usuario['nombre_usuario']));
		return $query->row_array();
	}
	// ====== ALTA de un usuario
	public function insert_entry($usuario)
	{
		return $this->db->insert('usuarios',$usuario);
	}

}