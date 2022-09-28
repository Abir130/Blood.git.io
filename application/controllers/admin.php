<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function admin_login_page()
	{

		if (isset($_SESSION['username'])) {
			redirect('dashboard');
		} else {
			$this->load->view('admin-login');
		}
	}

	public function admin_login()
	{

		$phone = $this->input->post('phone', true);
		$password = $this->input->post('password', true);
		$this->load->model('admin_login');
		$result = $this->admin_login->administrator_login_info($phone, $password);
		$sdata = array();
		if ($result && $phone != null && $password != null) {

			$_SESSION['admin'] = true;
			$_SESSION['username'] = $result->name;
			$_SESSION['id'] = $result->id;
			redirect('dashboard');
		} else {
			$sdata['message'] = "<span class='text-danger'>Number Invalid or Password</span>";
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
	}




	// user login

	public function login()
	{

		$phone = $this->input->post('phone', true);
		$this->load->model('admin_login');
		$result = $this->admin_login->admin_login_info($phone);
		$sdata = array();
		if ($result && $phone != null) {
			$_SESSION['username'] = $result->name;
			$_SESSION['id'] = $result->id;
			redirect('dashboard');
		} else {
			$sdata['message'] = "<span class='text-danger'>Number Invalid</span>";
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
	}



	public function admin_logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['admin']);
		$sdata['message'] = "<span class='ancor-color'>Log out successfully</span>";
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}

	public function signup()
	{

		if (isset($_SESSION['username'])) {
			redirect('dashboard');
		} else {
			$this->load->view('signup');
		}
	}

	public function add_user()
	{
		$sdata['adduser'] = "active";
		$this->session->set_userdata($sdata);
		$data['view_path'] = 'add-user';
		$this->load->view('template', $data);
	}

	public function add_member()
	{
		$phone = $this->input->post('phone', true);
		if (strlen($phone) == 11) {
			$this->load->model('admin_model');
			$this->admin_model->add_admin_data($phone);
			$this->session->set_flashdata('success', 'Member added successfully ');
			redirect('add-user');
		} else {
			$this->session->set_flashdata('error', 'Invalid number');
			redirect('add-user');
		}
	}



	public function insert()
	{
		$phone = $this->input->post('phone', true);
		if (strlen($phone) == 11) {
			$this->load->model('admin_model');
			$this->admin_model->save_admin_data($phone);
			$sdata['message'] = '<span class="ancor-color">SignUp Successfully</span>';
			$this->session->set_userdata($sdata);
			redirect('login-page');
		} else {
			$this->session->set_flashdata('error', 'Invalid number');
			redirect('admin-signup');
		}
	}


	public function user_profile($id)
	{
		$this->load->model('admin_model');
		$data['table_title'] = 'My Profile';
		$data['admin_data_id'] = $this->admin_model->admin_data_id($id);
		$data['userNumber'] = true;
		$data['view_path'] = 'user-profile';
		$_SESSION['config-pro-btn'] = true;
		$this->load->view('template', $data);
	}

	public function	donor_profile($id)
	{
		$this->load->model('admin_model');
		$data['table_title'] = 'Donor Profile';
		$data['admin_data_id'] = $this->admin_model->admin_data_id($id);
		$result = $this->admin_model->admin_data_id($id);
		$data['view_path'] = 'user-profile';
		if (isset($_SESSION['admin'])) {
			$_SESSION['config-pro-btn'] = true;
		} else {
			$_SESSION['config-pro-btn'] = false;
		}
		if ($result->status == 'Available') {
			$data['userNumber'] = true;
		} else {
			isset($_SESSION['admin']) ? $data['userNumber'] = true : $data['userNumber'] = false;
		}
		$this->load->view('template', $data);
	}


	public function update_profile()
	{
		$phone = $this->input->post('phone', true);
		$id = $this->input->post('id', true);
		$this->load->model('admin_model');
		$this->admin_model->update_profile($id, $phone);
		redirect('profile-update/' . $id);
	}



	public function profile_update_page($id)
	{
		$this->load->model('admin_model');
		$data['admin_data_id'] = $this->admin_model->admin_data_id($id);
		$data['view_path'] = 'update-profile';
		$this->load->view('template', $data);
	}
}
