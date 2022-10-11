<?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of Employee Model
     *
     * @author TechArise Team
     *
     * @email info@techarise.com
     */
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Employee_model extends CI_Model {
        // Declare variables
        private $_limit;
        private $_pageNumber;
        private $_offset;
        // setter getter function
        public function setLimit($limit) {
            $this->_limit = $limit;
        }

        public function setPageNumber($pageNumber) {
            $this->_pageNumber = $pageNumber;
        }

        public function setOffset($offset) {
            $this->_offset = $offset;
        }
        // Count all record of table "employee" in database.
        public function getAllEmployeeCount() {
            $this->db->from('news');
            return $this->db->count_all_results();
        }
		
		public function getAllEmployeeCount2() {
			
			//$ids = array('Latest News');
	
			//$this->db->where_in('category', $ids);
			   $this->db->where('category','Latest News');
            $this->db->from('news');
            return $this->db->count_all_results();
			
			
        }
		
		

		
		
        // Fetch data according to per_page limit.
        public function employeeList($order_by='') { 
			
            $this->db->select(array('e.id', 'e.category', 'e.heading', 'e.summery', 'e.createdate', 'e.image'));
            $this->db->from('news as e');       
			if(!empty($order_by))
            $this->db->order_by('e.createdate', $order_by);			
            $this->db->limit($this->_pageNumber, $this->_offset);
            $query = $this->db->get();
            return $query->result_array();
        }
		
		
		  public function employeeListlatest($order_by='') { 
			 $this->db->where('category','Latest News');	
            $this->db->select(array('e.id', 'e.category', 'e.heading', 'e.summery', 'e.createdate', 'e.image'));
            $this->db->from('news as e');       
			if(!empty($order_by))
            $this->db->order_by('e.createdate', $order_by);			
            $this->db->limit($this->_pageNumber, $this->_offset);
            $query = $this->db->get();
            return $query->result_array();
        }
		
		 public function employeeListt10($order_by='') { 
			 $this->db->where('category','T10');	
            $this->db->select(array('e.id', 'e.category', 'e.heading', 'e.summery', 'e.createdate', 'e.image'));
            $this->db->from('news as e');       
			if(!empty($order_by))
            $this->db->order_by('e.createdate', $order_by);			
            $this->db->limit($this->_pageNumber, $this->_offset);
            $query = $this->db->get();
            return $query->result_array();
        }

    }

    ?>