<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maineditor_m extends CI_Model {

    protected $_primary_key = 'preid';
    protected $_table_name = 'prefix';
    protected $_primary_filter = 'intval';
    //validation rules
        public $rules  = array(
    			'prefix' => array(
    				'field' => 'prefix',
    				'label' => 'Prefix ',
    				'rules' => 'trim|required'
    			)
    		);

        function get_new(){ //
          $mainedit = new stdClass();
          $mainedit->prefix = '';
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
            $this->db->join('prefix','prefix.preid=directors.title'); //get title from prefix table
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

        //get director's designations.
        public function getdirdesignations(){
            $this->db->select('*');
            $this->db->from('directordesignation');
            //$this->db->join('prefix','prefix.preid=directors.title'); //get title from prefix table
            //$this->db->where('dirid');
            //$this->db->join('stockbroker','stockbroker.stockbrokerid=cdsaccount.stockbrokerid');
            $this->db->order_by('dirdesigid', 'DESC');
            $query = $this->db->get(); //get the table ('directors')
              // $this->get();
            //var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }

        //get Company Sectors.
        public function getComSectors(){
            $this->db->select('*');
            $this->db->from('sector');
            $this->db->order_by('sectorid', 'DESC');
            $query = $this->db->get(); //get the table ('Sectors')
          //  var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }

        //get Company Secretary.
        public function getComSecretary(){
            $this->db->select('*');
            $this->db->from('companysecretary');
            $this->db->order_by('secid', 'DESC');
            $query = $this->db->get(); //get the table ('Secretary')
          //  var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }

        //get Broker Company Type.
        public function getBorkerComType(){
            $this->db->select('*');
            $this->db->from('brokercomtype');
            $this->db->order_by('brocomtypeid', 'DESC');
            $query = $this->db->get(); //get the table ('Sectors')
          //  var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }

        //get bank
        public function getBanks($bankid = NULL){
            $this->db->select('*');
            $this->db->from('bank');
            $method = 'result';

            if($bankid != NULL){
              $this->db->where('bankid',$bankid);
              $method = 'row';
            }
            //$this->db->join('stockbroker','stockbroker.stockbrokerid=cdsaccount.stockbrokerid');
            $this->db->order_by('bankid', 'DESC');
            $query = $this->db->get(); //get the table ('directors')
              // $this->get();
            if($query){
                return $query->$method();
            }else{
                return FALSE;
            }
        }

        //get bank
        public function getBankBranch($id){
            $this->db->select('*');
            $this->db->from('bankbranch');
            $this->db->join('bankbranchcode','bankbranchcode.branchid=bankbranch.branchid');
            $this->db->join('bank','bank.bankid=bankbranchcode.bankid');
            $this->db->where('bankbranchcode.bankid',$id);
            $this->db->order_by('bankbranch.branchid', 'DESC');
            $query = $this->db->get(); //get the table ('directors')
              // $this->get();
          //var_dump($this->db->last_query());
            if($query){
                return $query->result();
            }else{
                return FALSE;
            }
        }

    /*    SELECT * FROM `bankbranch`
          JOIN `bankbranchcode` ON
          `bankbranchcode`.`branchid`=`bankbranch`.`branchid`
          JOIN `bank` ON `bank`.`bankid`=`bankbranchcode`.`bankid`
          WHERE bankbranchcode.bankid=1
          ORDER BY `bankbranch`.`branchid` DESC
    */


    //get all bank branches
    public function getAllBankBranches(){
        $this->db->select('*');
        $this->db->from('bankbranch');
        $this->db->order_by('branchid', 'DESC');
        $query = $this->db->get(); //get the table ('directors')
          // $this->get();
      //var_dump($this->db->last_query());
        if($query){
            return $query->result();
        }else{
            return FALSE;
        }
    }//end of get all bank branches

    //get all bank branches
    public function getAllGrade(){
        $this->db->select('*');
        $this->db->from('branchgrade');
        $this->db->order_by('gradeid', 'DESC');
        $query = $this->db->get(); //get the table ('directors')
          // $this->get();
      //var_dump($this->db->last_query());
        if($query){
            return $query->result();
        }else{
            return FALSE;
        }
    }//end of get all bank branches

    }
    ?>
