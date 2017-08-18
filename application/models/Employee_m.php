<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_m extends CI_Model {

    protected $_primary_key = 'id';
    protected $_table_name = 'employee';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
			'name' => array(
				'field' => 'name',
				'label' => 'Name ',
				'rules' => 'trim|required'
			),
			'nic' => array(
				'field' => 'nic',
				'label' => 'NIC No',
				'rules' => 'trim|required'
			),
      'gender' => array(
        'field' => 'gender',
        'label' => 'Gender',
        'rules' => 'trim|required'
      ),

    );


    function get_new(){ //
      $employee = new stdClass(); //ci class
      $employee->name = ''; //from load empty
      $employee->nic = '';
      $employee->gender = 'Male';
    return $employee;
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
  		if($id === NULL){ //new employee
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
