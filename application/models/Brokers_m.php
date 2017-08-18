<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brokers_m extends CI_Model {

    protected $_primary_key = 'brokercomid';
    protected $_table_name = 'brokercompany';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
			'name' => array(
				'field' => 'name',
				'label' => 'Company name ',
				'rules' => 'trim|required'
			),
			'symbol' => array(
				'field' => 'symbol',
				'label' => 'Symbol',
				'rules' => 'trim|required'
			),
  /*    'type' => array(
				'field' => 'type',
				'label' => 'Type',
				'rules' => 'trim|required'
			), */
			'address1' => array(
				'field' => 'address1',
				'label' => 'Address 1',
				'rules' => 'trim|required'
			),
      'address2' => array(
				'field' => 'address2',
				'label' => 'Address 2',
				'rules' => 'trim|required'
			),
      'address3' => array(
				'field' => 'address3',
				'label' => 'Address 3',
				'rules' => 'trim|required'
			),
      'address4' => array(
				'field' => 'address4',
				'label' => 'Address 4',
				'rules' => 'trim|required'
			),
      'address5' => array(
				'field' => 'address5',
				'label' => 'Address 5',
				'rules' => 'trim|required'
			)
		);

    function get_new(){ //
      $brokers = new stdClass();
      $brokers->name = '';
      $brokers->symbol = '';
      $brokers->brocomtypeid = '';
      $brokers->address1 = '';
      $brokers->address2 = '';
      $brokers->address3 = '';
      $brokers->address4 = '';
      $brokers->address5 = '';
      return $brokers;
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
  		if($id === NULL){ //new broker
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

    //get data from brokercomtype table - model code
    public function getBrokercomtype()
    {
        $query = $this->db->get('brokercomtype')->result();
        if($query){
            return $query;
        }else{
            return FALSE;
          }
        }
    //end of model code

    //get stock brokers - members only (model code)
    public function getMembers($typeid)
    {
        $this->db->order_by($this->_primary_key, 'DESC');
        $this->db->where('brocomtypeid',$typeid);
         $query = $this->get();
        if($query){
            return $query;
        }else{
            return FALSE;
        }
    }
    //end of get stock brokers - members only

    public function gettypeid($type)
    {
        $this->db->where('typeslug', $type);
        $query = $this->db->get('brokercomtype');
        if($query->row()){
          return $query->row()->brocomtypeid;
        }
        else {
          return FALSE;
        }
    }

    public function getAllBrokers()
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
