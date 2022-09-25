<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model {
	public function admin_login_info($phone)
	{
		$this->db->select('*');
        $this->db->from('tbl_blood');
        if($this->db->where('type','volunteer')){
            $_SESSION['admin']= true;
        }
        $this->db->where('phone',$phone);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;

	}

}