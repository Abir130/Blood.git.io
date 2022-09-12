<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function ab_negetive()
	{

          $data['table_title']='Blood Group : AB-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_ab_neg();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

    public function ab_positive()
	{
          $data['table_title']='Blood Group : AB+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_ab_positive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

    public function a_negetive()
	{
          $data['table_title']='Blood Group : A-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_a_negetive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function a_positive()
	{
          $data['table_title']='Blood Group : A+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_a_positive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}


     public function b_negetive()
	{
          $data['table_title']='Blood Group : B-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_b_negetive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function b_positive()
	{
          $data['table_title']='Blood Group : B+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_b_positive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function o_negetive()
	{
          $data['table_title']='Blood Group : O-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_o_negetive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function o_positive()
	{
          $data['table_title']='Blood Group : O+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_o_positive();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}


    // search city

      public function user_khulna()
	{
          $data['table_title']='Location : Khulna';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_khulna();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_dhaka()
	{
          $data['table_title']='Location : Dhaka';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_dhaka();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function user_barisal()
	{
          $data['table_title']='Location : Barisal';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_barisal();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}
    
      public function user_Chittagong()
	{
           $data['table_title']='Location : Chittagong';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_Chittagong();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function user_mymensingh()
	{
          $data['table_title']='Location : Mymensingh';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_mymensingh();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_rajshahi()
	{
          $data['table_title']='Location : Rajshahi';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_rajshahi();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_sylhet()
	{
           $data['table_title']='Location : Sylhet';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_sylhet();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_rangpur()
	{
          $data['table_title']='Location : Rangpur';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_rangpur();  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}
}
