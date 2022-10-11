<?php ini_set('display_errors',1);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminblog extends CI_Controller {
	function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
		date_default_timezone_set("Asia/Kolkata");
		}
		 
	 private function checklogin(){ 
     if(empty($this->session->userdata('data')))
     {
        redirect(base_url().'Admin/index');
     } 
  
  }
        public function add(){
             $this->load->view('back/header');
             if(!empty($_POST)){
                $blogques= json_encode($this->input->post('b_ques1'),JSON_UNESCAPED_SLASHES);
                $blogdesc= json_encode($this->input->post('b_desc1'),JSON_UNESCAPED_SLASHES);
                $tbl="blog_info";
                $data=array(					
                   'b_title'=> $this->input->post('b_title'),          
                   'b_heading'=> $this->input->post('b_heading'),          
                   'b_name'=> $this->input->post('b_name'),          
                   'b_description'=> $this->input->post('b_description'),          
                   'b_ques1'=>$blogques,            
                    'b_desc1'=>$blogdesc,            
                    'status'=> $this->input->post('status'),          
                  'createdate'=> date("Y-m-d H:i:s"),         
                   
            	 );

               if(!empty($_FILES)){
               // $blogimg= json_encode($this->input->post('b_pic'),JSON_UNESCAPED_SLASHES);       
                  $uploadPath = 'upload_images/';
                $config['encrypt_name'] = TRUE; 
                  $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('b_img')){
                      $error = $this->upload->display_errors();
                      if(!empty($error)){
  
                          echo $error;
                          die;
                      }
                      $fileData = $this->upload->data();
                      
                      $data['b_img'] = $fileData['file_name'];
                  }
               } 
               $this->Adminmodel->insert($tbl, $data);
               // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("adminblog/list");
              }
                $this->load->view('back/blog/add');
                $this->load->view('back/footer');
             
          }
 	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header');

      $data['viewblog'] = $this->Adminmodel->select('blog_info','',0,'desc');

	  $this->load->view('back/blog/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("blog_info",$con);
        $this->load->view('back/blog/list', $data);
        redirect("adminblog/list");
    }
   
    public function edit($id){
      $this->checklogin();
               if (!empty($_POST)) {
              $blogques= json_encode($this->input->post('b_ques1'),JSON_UNESCAPED_SLASHES);
              $blogdesc= json_encode($this->input->post('b_desc1'),JSON_UNESCAPED_SLASHES);
                  $data = array(

            'b_title'=> $this->input->post('b_title'),          
             'b_heading'=> $this->input->post('b_heading'),          
             'b_name'=> $this->input->post('b_name'),
             'b_description'=> $this->input->post('b_description'),   
             'b_ques1'=>$blogques,            
              'b_desc1'=>$blogdesc,            
              'status'=> $this->input->post('status'),          
            //'createdate'=> date("Y-m-d H:i:s"),  
                     
      
       );
        
       if(!empty($_FILES)){
           $uploadPath = 'upload_images/';
           $config['encrypt_name'] = TRUE; 
           $config['upload_path'] = $uploadPath;
             $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if($this->upload->do_upload('b_img')){
               $error = $this->upload->display_errors();
               if(!empty($error)){

                   echo $error;
                   die;
               }
               $fileData = $this->upload->data();
               $data['b_img'] = $fileData['file_name'];
          
           }
       
       }
       
       $con=array("id" => $id);

       $this->Adminmodel->update("blog_info", $data, $con);

     redirect("adminblog/list");
    }

      $data['update']=$this->Adminmodel->select('blog_info',['id'=>$id]); 
      
    $data['admin'] = $this->session->all_userdata();
    $this->load->view('back/header',  $data);

    $this->load->view('back/blog/edit',$data);
  
    $this->load->view('back/footer');
 }
   
}