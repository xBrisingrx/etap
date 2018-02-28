<?php 

class Empresa_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
    }

    public function get($attr = null, $valor = null)
    {
    	if($attr != null and $valor != null)
    	{
    		$query = $this->db->get_where('empresas', array($attr => $valor));
    		return $query->result();
    	} else 
	    	{
	    		$query = $this->db->get('empresas');
	    		return $query->result();
	    	}
    }


    public function insert_entry($empresa)
    {
    	return $this->db->insert('empresas', $empresa);
    }

}