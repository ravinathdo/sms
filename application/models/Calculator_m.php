<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator_m extends CI_Model {

    protected $_primary_key = 'calid';
    protected $_table_name = 'cal';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
      'buy' => array(
				'field' => 'buy',
				'label' => 'Bought Price',
				'rules' => 'trim|required'
			),
      'sell' => array(
        'field' => 'sell',
        'label' => 'Sold Price',
        'rules' => 'trim|required'
      ),
      'qty' => array(
        'field' => 'qty',
        'label' => 'Quantity',
        'rules' => 'trim|required'
      )
		);

    function get_new(){ //
      $calculate = new stdClass();
      $calculate->buy = '';
      $calculate->sell = '';
      $calculate->qty = '';

      return $calculate;
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
