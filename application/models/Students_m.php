<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_m extends CI_Model {

    protected $_primary_key = 'id';
    protected $_table_name = 'students';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
			'fname' => array(
				'field' => 'fname',
				'label' => 'First name ',
				'rules' => 'trim|required'
			),
			'lname' => array(
				'field' => 'lname',
				'label' => 'Last name',
				'rules' => 'trim|required'
			),
			'address' => array(
				'field' => 'address',
				'label' => 'Address',
				'rules' => 'trim|required'
			),
			'mobile' => array(
				'field' => 'mobile',
				'label' => 'Mobile number',
				'rules' => 'trim|required|numeric'
			)
		);

    function get_new(){ //
      $student = new stdClass();
      $student->fname = '';
      $student->lname = '';
      $student->address = '';
      $student->mobile = '';
      return $student;
    }

    public function array_from_post($fields){
  		$data = array();

  		foreach ($fields   as $field) {
  			$data[$field] = $this->input->post($field);
  		}
  		return $data;
  	}

    public function get($id = NULL , $single = FALSE){

  		if($id != NULL){
  			$filter = $this->_primary_filter;
  			$id = $filter($id);
  			$this->db->where($this->_primary_key, $id);
  			$method = 'row';
  		}
  		elseif ($single == TRUE) {
  			$method = 'row';
  		}
  		else{
  			$method = 'result';
  		}


  		return $this->db->get($this->_table_name)->$method();

  	}


  	public function get_by($where, $single = FALSE){

  		$this->db->where($where);
  		return $this->get(NULL, $single);
  	}

    public function save($data, $id =NULL){

  		//Insert
  		if($id === NULL){ //new student
  			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
  			$this->db->set($data);
  			$this->db->insert($this->_table_name);
  			$id = $this->db->insert_id();
  		}
  		//Update
  		else{
  			$filter = $this->_primary_filter;
  			$id = $filter($id);
  			$this->db->set($data);
  			$this->db->where($this->_primary_key , $id);
   			$this->db->update($this->_table_name);
  		}


  		return $id;

  	}

    public function delete($id){
  		$filter = $this->_primary_filter;
  		$id = $filter($id);
  		if(!$id){
  			return FALSE;
  		}

  		$this->db->where($this->_primary_key , $id);
  		$this->db->limit(1);
  		$this->db->delete($this->_table_name);
  	}

    public function getAll()
    {
        $this->db->order_by($this->_primary_key, 'DESC');
         $query = $this->get();
        if($query){
            return $query;
        }else{
            return FALSE;
        }
    }

}
?>
