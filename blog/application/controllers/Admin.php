<?php
 ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
		date_default_timezone_set("Asia/Kolkata");
		}
		

public function index(){
	
	
				$this->load->view('back/login');  
				if(!empty($_POST)){
					
					
				  $tbl="admin";
				  $data=array(
				  'email'=> $this->input->post('email'),
				  'password'=> $this->input->post('password'),    
				  );
				  $row=$this->Adminmodel->select('admin',$data);
				   
					 if(count($row)>0)
					 {
					  $this->session->set_userdata('data',$row);
					  redirect('/Admin/dashboard');
					 }else{
					 echo " Wrong password"; 
					 }		
					 }
				}
				 
				 
		public function dashboard(){
    //  $this->checklogin();
	  
	 
      $this->load->view('back/header');
	   
      $this->load->view('back/dashboard');
      $this->load->view('back/footer');
    }
	
	
	
	public function web_setting($id){
			  $this->checklogin();
			if (!empty($_POST)) {
              $data = array(
              'title'=> $this->input->post('title'),
              'phone'=> $this->input->post('phone'),
              'email'=> $this->input->post('email'),
              'address'=> $this->input->post('address'),
			  'description'=> $this->input->post('description'),
               'facebook'=> $this->input->post('facebook'),
              'twitter'=> $this->input->post('twitter'),
              'instagram'=> $this->input->post('instagram'),
               'meta_description'=> $this->input->post('meta_description'),
              'meta_title'=> $this->input->post('meta_title'),
              'meta_keyword'=> $this->input->post('meta_keyword'),
               'createdate' => date("Y-m-d H:i:s"),
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('logo')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){
                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['logo'] = $fileData['file_name'];
                }
            }
			 if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('fevicon')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['fevicon'] = $fileData['file_name'];
					
                }

            }
			
            $con=array("id" => $id);
            $this->Adminmodel->update("web_setting", $data, $con);
			// redirect("Adminservices/index");
        }
           $data['update']=$this->Adminmodel->select('web_setting',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header', $data);
		$data['title']='web_setting';
		 
        $this->load->view('back/web_setting/edit',$data);
        $this->load->view('back/footer');
    }
	
	
	public function changepassword($id){
			  $this->checklogin();
			if (!empty($_POST)) {
              $data = array(
               'password'=> $this->input->post('password'),
              'email'=> $this->input->post('email'),
              'name'=> $this->input->post('name'),
              
               'createdate' => date("Y-m-d H:i:s"),
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){
                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['image'] = $fileData['file_name'];
                }
            }
			  
			
            $con=array("id" => $id);
            $this->Adminmodel->update("admin", $data, $con);
			// redirect("Adminservices/index");
        }
           $data['update']=$this->Adminmodel->select('admin',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header', $data);
		$data['title']='admin';
		 
        $this->load->view('back/web_setting/changepassword',$data);
        $this->load->view('back/footer');
    }
	
	
 
   function logout(){
	   session_start();
	   session_destroy();
	   redirect(base_url().'Admin/index');
	   }
 
  private function checklogin(){

     if(empty($this->session->userdata('data')))
     {
        redirect(base_url().'Admin/index');
     }
  
  }
    
   

}
