<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BankBranchAssign_m extends CI_Model {

  protected $_primary_key = 'codeid';
  protected $_table_name = 'bankbranchcode';
  protected $_primary_filter = 'intval';
//validation rules
  public $rules  = array(
    'branchname' => array(
      'field' => 'branchname',
      'label' => 'Branch Name',
      'rules' => 'trim|required'
    ),
    'branchcode' => array(
      'field' => 'branchcode',
      'label' => 'Branch Code',
      'rules' => 'trim|required'
    ),
    'grade' => array(
      'field' => 'grade',
      'label' => 'Grade',
      'rules' => 'trim|required'
    ),
    'address' => array(
      'field' => 'address',
      'label' => 'Address',
      'rules' => 'trim|required'
    ),
    'tel1' => array(
      'field' => 'tel1',
      'label' => 'Telephone 1',
      'rules' => 'trim|required'
    ),
    'tel2' => array(
      'field' => 'tel2',
      'label' => 'Telephone 2',
      'rules' => 'trim|required'
    ),
  );

  function get_new(){ //
    $mainedit = new stdClass();
    $mainedit->branchname = '';
    $mainedit->branchcode = '';
    $mainedit->grade = '';
    $mainedit->address = '';
    $mainedit->tel1 = '';
    $mainedit->tel2 = '';
    return $mainedit;
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

        //get directors
        public function getdirdetils(){
            $this->db->select('*');
            $this->db->from('directors');
            //$this->db->where('dirid');
            //$this->db->join('stockbroker','stockbroker.stockbrokerid=cdsaccount.stockbrokerid');
            $this->db->order_by('dirid', 'DESC');
            $query = $this->db->get(); //get the table ('directors')
              // $this->get();
            //var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }


        //Show Title in AddDir - model code
        public function getTitle(){
            $query = $this->db->get('prefix')->result();
            if($query){
                return $query;
            }else{
                return FALSE;
              }
            }



    }
    ?>
