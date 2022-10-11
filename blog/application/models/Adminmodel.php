<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {



function callAPI($method, $url, $data){
   $curl = curl_init();

   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 278516ANYWfGuhSt315cebc1b1',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}


function referal_exists($key)
{
    $this->db->where('referal_code',$key);
    $query = $this->db->get('referal_code');
    $query2 = $this->select('referal_code',['referal_code'=>$key]);
	
    if ($query->num_rows() > 0){
      echo $query2[0]->amount;
    }
    else{
        return false;
    }
}

function insert($tbl,$data){
       
        $this->db->insert($tbl,$data);
        return $this->db->insert_id();
 
}



 	protected $table = 'news';
 
	public function get_count() {
        return $this->db->count_all($this->table);
    }

	public function get_count2() {
	return $this->db->where(['category'=>T10])->from($this->table)->count_all_results();
     //  $this->db->count_all($this->table);		
    }
	

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
		
        $query = $this->db->get($this->table);
        return $query->result();
    }

function product_search($search_book){

                 $this->db->like('title', $search_book);
                 $this->db->or_like('species', $search_book);
                 $this->db->or_like('vibes', $search_book);
                 $query = $this->db->get('product');
                 return $query->result();
  }

/* pagination model */


	
	/* pagination model end here */

 function select($tbl,$con='', $limit='', $order_by=''){
        $this->db->select("*");
        $this->db->from($tbl);
        if(!empty($con))
            $this->db->where($con);
 if(!empty($limit))
            $this->db->limit($limit);

 if(!empty($order_by))
            $this->db->order_by('createdate', $order_by);


        $query = $this->db->get();
        return $query->result();
    }



 function selectid($tbl,$con='', $limit='', $order_by=''){
        $this->db->select("*");
        $this->db->from($tbl);
        if(!empty($con))
            $this->db->where($con);
			 if(!empty($limit))
			 $this->db->limit($limit);
			 if(!empty($order_by))
            $this->db->order_by('id', $order_by);
        $query = $this->db->get();
        return $query->result();
    }
	
	
	
	function selectstatus($tbl,$con='', $limit='', $order_by=''){
        $this->db->select("*");
        $this->db->from($tbl);
        if(!empty($con))
            $this->db->where($con);
			$this->db->where('status','1');
			 if(!empty($limit))
			 $this->db->limit($limit);
			 if(!empty($order_by))
            $this->db->order_by('id', $order_by);
        $query = $this->db->get();
        return $query->result();
    }
    
    
    	function selectstatus1($tbl,$con='', $limit='', $order_by=''){
        $this->db->select("*");
        $this->db->from($tbl);
        if(!empty($con))
            $this->db->where($con);
			$this->db->where('status','0');
			 if(!empty($limit))
			 $this->db->limit($limit);
			 if(!empty($order_by))
            $this->db->order_by('id', $order_by);
        $query = $this->db->get();
        return $query->result();
    }




    function delete($tbl,$con){
        $this->db->where($con);
        $this->db->delete($tbl);
        return $this->db->affected_rows();
    }


        function update($tbl,$data,$con){
        $this->db->where($con);
        $this->db->update($tbl,$data);
        return $this->db->affected_rows();
    }
	
	

	
    function getcategory_id($id){
        $this->db->select("*");
        $this->db->from('category');
       
        $this->db->where('id',$id);

        $query = $this->db->get();
        return $query->row();

    }
	
	
	public function send_mail($to,$subject,$msg,$file='')
	{
    $this->load->library('email'); 
    $this->email
    ->from('info@viasacademy.com', 'VIAS Academy')
    ->to($to)
    ->subject($subject)
    ->message($msg)
    ->set_mailtype('html');
    if(!empty($file))
    {
    $this->email->attach($file);
    }
$this->email->send();
//print_r('done');die;
		
	}
	
	
	
	 function fetch_subject($course_id)
 {
  $this->db->where('course_id', $course_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('subject');
  //$output = '<option value="">Select University</option>';
  
  foreach($query->result() as $row)
  {
   $output.= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }
 
 
 
 	
	 function fetch_topic($subject_id)
 {
  $this->db->where('subject_id', $subject_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('topic');
  //$output = '<option value="">Select University</option>';
  
  foreach($query->result() as $row)
  {
   $output.= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }
	
	
	
	
	
	 function fetch_subject_hindi($course_id)
 {
  $this->db->where('course_id', $course_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('subject_hindi');
  //$output = '<option value="">Select University</option>';
  
  foreach($query->result() as $row)
  {
   $output.= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }
 
 
 
 	
	 function fetch_topic_hindi($subject_id)
 {
  $this->db->where('subject_id', $subject_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('topic_hindi');
  //$output = '<option value="">Select University</option>';
  
  foreach($query->result() as $row)
  {
   $output.= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }
	
	
	
 function fetch_emp_id($emp_id)
 {
  $this->db->where('status','1');
  $this->db->where('emp_id', $emp_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('employee');
  
  foreach($query->result() as $row)
  {
   $output.= $row->status;
  }
  if($output == ''){
  return 0 ;
  } else {
	  return $output;
 }
 }
 	
	
	
	
 function fetch_referal($referal_code)
 {
  $this->db->where('status','1');
  $this->db->where('referal_code', $referal_code);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('referal_code');
  
  foreach($query->result() as $row)
  {
   $output.= $row->amount;
  }
  if($output == ''){
  return 0 ;
  } else {
	  return $output;
 }
 }
 
 
 	 function fetch_amt($id)
 {
  $this->db->where('id', $id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('package');
  //$output = '<option value="">Select University</option>';
  
  foreach($query->result() as $row)
  {
   $output.= '<option value="'.$row->price.'">'.$row->price.'</option>';
  }
  return $output;
 }
 
 
 /* function fetch_referal($referal_code)
 {
  $this->db->where('status','1');
  $this->db->where('referal_code', $referal_code);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('referal_code');
  
  foreach($query->result() as $row)
  {
   $output.= $row->amount;
  }
  if($output == ''){
  return 0 ;
  } else {
	  return $output;
 }
 }*/
 
	

	public function createData($data)
	{
		$query = $this->db->insert('student_chat',$data);
		return $query;
	}
	
	function fetch_university_country()
 {
  $this->db->order_by("country", "ASC");
  $query = $this->db->get("university_category");
  return $query->result();
 }

 function fetch_university($country_id)
 {
  $this->db->where('country_id', $country_id);
  $this->db->order_by('college_name', 'ASC');
  $query = $this->db->get('university');
  //$output = '<option value="">Select University</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->college_name.'">'.$row->college_name.'</option>';
  }
  return $output;
 }



public function get_data(){
        $query=$this->db->query("SELECT st.*
                                 FROM live_class st 
                                 ORDER BY st.id ASC");
        return $query->result_array();
    }

 
	
	

}
