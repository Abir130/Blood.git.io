<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function save_admin_data()
	{
		$data=array();
        $data['name']=$this->input->post('name',true);
		$data['age']=$this->input->post('age',true);
        $data['group_name']=$this->input->post('group_name',true);
		$data['city']=$this->input->post('city',true);
		$data['type']=$this->input->post('type',true);
        $data['phone']=$this->input->post('phone',true);
        $this->db->insert('tbl_blood',$data);
		

	}

	public function admin_data_id($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('id',$id);
		$query_result = $this->db->get();
		$user_info = $query_result->row();
		return $user_info;

		

	}


	public function update_profile($id){
		$data=array();
		$data['id']=$this->input->post('id',true);
        $data['name']=$this->input->post('name',true);
		$data['age']=$this->input->post('age',true);
        $data['group_name']=$this->input->post('group_name',true);
		$data['city']=$this->input->post('city',true);
		$data['type']=$this->input->post('type',true);
        $data['phone']=$this->input->post('phone',true);
		$this->db->WHERE('id',$id);
        $this->db->update('tbl_blood',$data);

	}
}