<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDSAccounts_m extends CI_Model {

    protected $_primary_key = 'cdsaccid';
    protected $_table_name = 'cdsaccount';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
			  'brokercomid' => array(
				'field' => 'brokercomid',
				'label' => 'Stockbroker Company',
				'rules' => 'trim|required'
			),
		/*	'alias' => array(
				'field' => 'alias',
				'label' => 'Alias (Short Name)',
				'rules' => 'trim|required'
			), */
	/*		'stockbrokerid' => array(
				'field' => 'stockbrokerid',
				'label' => 'Broker Symbol',
				'rules' => 'trim|required'
			), */
      'cdsaccno' => array(
				'field' => 'cdsaccno',
				'label' => 'CDS Account No',
				'rules' => 'trim|required'
			),
      'opendate' => array(
				'field' => 'opendate',
				'label' => 'Open date',
				'rules' => 'trim|required'
			),

      'adviserfname' => array(
				'field' => 'adviserfname',
				'label' => 'First Name',
				'rules' => 'trim|required'
			),
      'adviserlname' => array(
				'field' => 'adviserlname',
				'label' => 'Last Name',
				'rules' => 'trim|required'
			),
      'tel_mob' => array(
				'lield' => 'tel_mob',
				'label' => 'Mobile',
				'rules' => 'trim|required'
			),
      'tel_direct' => array(
				'lield' => 'tel_direct',
				'label' => 'Telephone',
				'rules' => 'trim|required'
			),
      'email' => array(
				'lield' => 'email',
				'label' => 'email',
				'rules' => 'trim|required'
			)

    );

    function get_new(){ //
      $CDSAccounts = new stdClass();
      $CDSAccounts->brokercomid = '';
    //  $CDSAccounts->alias = '';
    //  $CDSAccounts->stockbrokerid = '';
      $CDSAccounts->cdsaccno = '';
      $CDSAccounts->opendate = '';

      $CDSAccounts->adviserfname = '';
      $CDSAccounts->adviserlname = '';
      $CDSAccounts->tel_mob = '';
      $CDSAccounts->tel_direct = '';
      $CDSAccounts->email = '';
      return $CDSAccounts;
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
  		} else {
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

//save to the stockbroker (adviser) table
  /*  public function advisersave($data, $id =NULL){
      $this->db->set($data);
      $this->db->insert('stockbroker');
      $id = $this->db->insert_id();
      return $id;
    } */

//Save to the stockbroker (adviser) table
    public function advisersave($data, $id =NULL){
      if($id === NULL){ //new insert to table
        !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
        $this->db->set($data);
        $this->db->insert('stockbroker');
        $id = $this->db->insert_id();
      }      
  		else{ //Update
  			$filter = $this->_primary_filter;
  			$id = $filter($id);
  			$this->db->set($data);
  			$this->db->where('stockbrokerid' , $id);
   			$this->db->update('stockbroker');
  		}
        return $id;
      }
//End

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
        $this->db->join('brokercompany','brokercompany.brokercomid=cdsaccount.brokercomid'); // joint with brokercompany table
        $this->db->order_by($this->_primary_key, 'DESC');
         $query = $this->get();
        if($query){
            return $query;
        }else{
            return FALSE;
        }
    }

    //get data from Stock Broker - model code
    public function getBrokercom()
    {
      /*
      $this->db->where('cdsaccount.cdsaccid<>brokercompany.id');
      $this->db->join('stockbroker','stockbroker.stockbrokerid=cdsaccount.stockbrokerid');
      */
        $query = $this->db->get('brokercompany')->result();
        if($query){
            return $query;
        }else{
            return FALSE;
          }
      }
    //end of model code

    public function getcdsdetils($id)
    {
        $this->db->select('*');
        $this->db->where('cdsaccount.cdsaccid',  $id);
        $this->db->join('stockbroker','stockbroker.stockbrokerid=cdsaccount.stockbrokerid');
         $query = $this->db->get('cdsaccount')->row();
          // $this->get();
        // var_dump($this->db->last_query());
        if($query){
            return $query;
        }else{
            return FALSE;
        }
    }
}
?>
