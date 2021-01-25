<?php

class Main_model extends CI_Model{


	public function get_all_projects()
	{
	
	$records=$this->db->query("select * from projectfront");
	return $records;

	}

	public function all_projects()
	{
	
	$records=$this->db->query("select * from projects");
	return $records;

	}

	

	public function get_all_blogs()
	{	
	$records=$this->db->query("select * from blogs");
	return $records;
	}

	public function get_blogs()
	{	
	$records=$this->db->query("select * from blogfront");
	return $records;
	}

	public function insert_data($data)
	{
		$this->db->insert("contact", $data);
	}
    
}

?>