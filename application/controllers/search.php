<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function ab_negetive()
	{

          $data['table_title']='Blood Group : AB-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_ab_neg();
         $data['user_district']=$this->search_user->user_district_data('group_name','AB-');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

    public function ab_positive()
	{
          $data['table_title']='Blood Group : AB+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_ab_positive();
         $data['user_district']=$this->search_user->user_district_data('group_name','AB+');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

    public function a_negetive()
	{
          $data['table_title']='Blood Group : A-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_a_negetive();
         $data['user_district']=$this->search_user->user_district_data('group_name','A-');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function a_positive()
	{
          $data['table_title']='Blood Group : A+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_a_positive();
         $data['user_district']=$this->search_user->user_district_data('group_name','A+');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}


     public function b_negetive()
	{
          $data['table_title']='Blood Group : B-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_b_negetive();
         $data['user_district']=$this->search_user->user_district_data('group_name','B-');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function b_positive()
	{
          $data['table_title']='Blood Group : B+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_b_positive();
         $data['user_district']=$this->search_user->user_district_data('group_name','B+');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function o_negetive()
	{
          $data['table_title']='Blood Group : O-';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_o_negetive();
         $data['user_district']=$this->search_user->user_district_data('group_name','O-');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function o_positive()
	{
          $data['table_title']='Blood Group : O+';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_o_positive(); 
         $data['user_district']=$this->search_user->user_district_data('group_name','O+');  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}


    // search city

      public function user_khulna()
	{
          $data['table_title']='City : Khulna';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_khulna();  
         $data['user_district']=$this->search_user->user_district_data('city','khulna'); 
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_dhaka()
	{
          $data['table_title']='City : Dhaka';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_dhaka();
          $data['user_district']=$this->search_user->user_district_data('city','Dhaka');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function user_barisal()
	{
          $data['table_title']='City : Barisal';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_barisal();  
          $data['user_district']=$this->search_user->user_district_data('city','barisal');  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}
    
      public function user_Chittagong()
	{
           $data['table_title']='City : Chittagong';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_Chittagong();
          $data['user_district']=$this->search_user->user_district_data('city','chittagong');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

      public function user_mymensingh()
	{
          $data['table_title']='City : Mymensingh';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_mymensingh();
         $data['user_district']=$this->search_user->user_district_data('city','mymensingh');    
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_rajshahi()
	{
          $data['table_title']='City : Rajshahi';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_rajshahi(); 
         $data['user_district']=$this->search_user->user_district_data('city','rajshahi'); 
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_sylhet()
	{
           $data['table_title']='City : Sylhet';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_sylhet();
         $data['user_district']=$this->search_user->user_district_data('city','sylhet');  
         //return the data in view  
         $this->load->view('table', $data);  

        
	}

     public function user_rangpur()
	{
          $data['table_title']='City : Rangpur';
		$this->load->model('search_user');  
         //load the method of model  
         $data['user_data']=$this->search_user->show_user_rangpur();
         $data['user_district']=$this->search_user->user_district_data('city','rangpur');   
         //return the data in view  
         $this->load->view('table', $data);  

        
	}
}
