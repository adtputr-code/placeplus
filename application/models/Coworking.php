<?php 

class Coworking extends CI_model
{
	public function getAllCoworking()
	{
		return $this->db->get('coworking')->result_array();
	}
	public function urlCoworking($id)
	{
		return $this->db->get_where('coworking', array('url_coworking' => $id))->row_array();
	}
}
?>