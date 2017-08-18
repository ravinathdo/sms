<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_m extends CI_Model {

    protected $_primary_key = 'comid';
    protected $_table_name = 'company';
    protected $_primary_filter = 'intval';
//validation rules
    public $rules  = array(
			'symbol' => array(
				'field' => 'symbol',
				'label' => 'Symbol',
				'rules' => 'trim|required'
			),
			'com_name' => array(
				'field' => 'com_name',
				'label' => 'Company Name',
				'rules' => 'trim|required'
			),
      'sectorid' => array(
        'field' => 'sectorid',
        'label' => 'sector',
        'rules' => 'trim|required'
      ),
      'boardid' => array(
        'field' => 'boardid',
        'label' => 'Listed Borad',
        'rules' => 'trim|required'
      ),
    'secid' => array(
      'field' => 'secid',
      'label' => 'Company Secretary',
      'rules' => 'trim|required'
    ),
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
			'tel' => array(
				'field' => 'tel',
				'label' => 'Tel Number',
				'rules' => 'trim|required|numeric'
			),
      'fax' => array(
        'field' => 'fax',
        'label' => 'Fax',
        'rules' => 'trim|required|numeric'
      ),
      'email' => array(
        'field' => 'email',
        'label' => 'email',
        'rules' => 'trim|required'
      ),
      'website' => array(
        'field' => 'website',
        'label' => 'website',
        'rules' => 'trim|required'
      ),
      'chairman' => array(
        'field' => 'chairman',
        'label' => 'chairman',
        'rules' => 'trim|required'
      ),
      'ceo' => array(
        'field' => 'ceo',
        'label' => 'ceo',
        'rules' => 'trim|required'
      ),
      'deputychairman' => array(
        'field' => 'deputychairman',
        'label' => 'deputychairman',
        'rules' => 'trim|required'
      ),
		);

    function get_new(){ //
      $company = new stdClass();
      $company->symbol = '';
      $company->com_name = '';
      $company->sectorid = '';
      $company->boardid = '';
      $company->secid = '';
      $company->address1 = '';
      $company->address2 = '';
      $company->address3 = '';
      $company->address4 = '';
      $company->tel = '';
      $company->fax = '';
      $company->email = '';
      $company->website = '';
      $company->chairman = '';
      $company->ceo = '';
      $company->deputychairman = '';
      return $company;
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
  		if($id === NULL){ //new company
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
        $this->db->join('sector','sector.sectorid=company.sectorid','left');
        $this->db->join('listedboard','listedboard.boardid=company.boardid','left');
        $this->db->join('companysecretary','companysecretary.secid=company.secid','left');
         $query = $this->get();
        //var_dump($this->db->last_query());
        if($query){
            return $query;
        }else{
            return FALSE;
        }
    }
    //Show Sectors - model code
    public function getSector()
    {
        $query = $this->db->get('sector')->result();
        if($query){
            return $query;
        }else{
            return FALSE;
          }
        }

        //Show Listed Boards - model code
        public function getListedBoard()
        {
            $query = $this->db->get('listedboard')->result();
            if($query){
                return $query;
            }else{
                return FALSE;
              }
            }

            //Show Compnay Secretary - model code
            public function getCompanySecretary()
            {
                $query = $this->db->get('companysecretary')->result();
                if($query){
                    return $query;
                }else{
                    return FALSE;
                  }
                }


/*    public function getCompanyByID($id)
    {
      $this->db->join('sector','sector.sectorid=company.sectorid','left');
      $this->db->where('comid', $id);
      $query = $this->db->get('company');
      //var_dump($this->db->last_query());
      if($query){
        return $query->row();
      }else {
        return FALSE;
      }
    }
    */

    public function getCompanySecByID($id) //Same as above - show the comnpany secotr by id
    {
      $this->db->join('sector','sector.sectorid=company.sectorid','left');
      //$this->db->where('comid', $id);
      $query = $this->get($id);
      //var_dump($this->db->last_query());
      if($query){
        return $query;
      }else {
        return FALSE;
      }
    }

    public function getListedBoardByID($id) //show the comnpany list Board by id
    {
      $this->db->join('listedboard','listedboard.boardid=company.boardid','left');
      $query = $this->get($id);
      //var_dump($this->db->last_query());
      if($query){
        return $query;
      }else {
        return FALSE;
      }
    }

    public function getComapnySecretaryByID($id) //show the Comnpany Secretary by id
    {
      $this->db->join('companysecretary','companysecretary.secid=company.secid','left');
      $query = $this->get($id);
      //var_dump($this->db->last_query());
      if($query){
        return $query;
      }else {
        return FALSE;
      }
    }




}
?>
