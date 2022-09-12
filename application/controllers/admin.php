<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function admin_login()
	{
		
		$phone = $this->input->post('phone',true);
		$this->load->model('admin_login');
		$result = $this->admin_login->admin_login_info($phone);
		$sdata = array();
		if($result && $phone != null){
			$_SESSION['username']=$result->name;
			$_SESSION['id']=$result->id;
			redirect('dashboard');
			
		}
		else{
			$sdata['message'] = "<span class='text-danger'>Number Invalid</span>";
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
	}

	public function admin_logout(){
		unset($_SESSION['username']);
		$sdata['message'] = "<span class='ancor-color'>Log out successfully</span>";
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}

	public function admin_signup(){
		
		if(isset($_SESSION['username'])){
			redirect('dashboard');
		}
		else{
			$this->load->view('signup');
		}
		
	}

	public function add_user(){
			$sdata['adduser'] = "active";
			$this->session->set_userdata($sdata);
			$data['view_path'] = 'add-user';
			$this->load->view('template',$data);
		
	}

	public function add_member(){
		$this->load->model('admin_model');
		$this->admin_model->save_admin_data();
		redirect('add-user');
	}

	public function admin_insert(){
		$_SESSION['message']= "<span class='ancor-color'>SignUp Successfully</span>";
		$this->load->model('admin_model');
		$this->admin_model->save_admin_data();
		redirect('login-page');
	}


	public function user_profile($id){
			$this->load->model('admin_model');
			$data['admin_data_id']=$this->admin_model->admin_data_id($id);
			$data['view_path'] = 'user-profile';
			$this->load->view('template',$data);
	}

	public function update_profile(){
		$id = $this->input->post('id',true);
		$this->load->model('admin_model');
		$this->admin_model->update_profile($id);
		redirect('user-list');
	}
}