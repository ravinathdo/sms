<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of security_model
 *
 * @author ravi
 */
class Security_Model extends CI_Model {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    //validation rules
    public $rules = array(
        'cdsaccid' => array(
            'field' => 'cdsaccid',
            'label' => 'CDS Account',
            'rules' => 'trim|required'
        ),
        'comid' => array(
            'field' => 'comid',
            'label' => 'Company Name',
            'rules' => 'trim|required'
        ),
        'qty' => array(
            'field' => 'qty',
            'label' => 'Quantity',
            'rules' => 'trim|required'
        ),
        'amount' => array(
            'field' => 'amount',
            'label' => 'Amount',
            'rules' => 'trim|required'
        )
    );

    //the standered class for security 
    function get_new() {
        $Security = new stdClass();
        $Security->secid = '';
        $Security->effectdate = '';
        $Security->cdsaccid = '';
        $Security->comid = '';
        $Security->com_name = '';
        $Security->subtypeid = '';
        $Security->qty = '';
        $Security->amount = '';
        $Security->total = '';
        $Security->cost_per_share = '';
        return $Security;
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getCompSecSubtype($compid) {
        /*
          SELECT securitiessubtype.*,equitysecurity.issuedqty FROM securitiessubtype
          INNER JOIN equitysecurity
          ON securitiessubtype.subtypeid = equitysecurity.subtypeid
          WHERE equitysecurity.comid = 1
         */

        $this->db->select('securitiessubtype.*,equitysecurity.issuedqty');
        $this->db->from('securitiessubtype');
        $this->db->join('equitysecurity', 'securitiessubtype.subtypeid = equitysecurity.subtypeid'); // joint with brokercompany table
        $where = "equitysecurity.comid = " . $compid;
        $this->db->where($where);

        $query = $this->db->get();
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

//
//    public function getCompSecSubtype($compid) {
//        $query = $this->db->get('securitiessubtype');
//        $result = $query->result();
//        if ($result) {
//            return $result;
//        } else {
//            return FALSE;
//        }
//    }



    public function getCal() {
        $query = $this->db->get('cal');
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getCalHistory($effectdate) {
        $this->db->select('*');
        $this->db->from('cal_history');
        $where = " effectdate <=  '" . $effectdate . "' ";
        $this->db->where($where);
        $this->db->order_by("effectdate", "desc");
        $this->db->limit('5');

        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function setUserSecurities($data) {
        $this->db->insert('user_securities', $data);
    }

    public function getUserSecuritiesList($param) {
        $this->db->select('user_securities.*, cdsaccount.cdsaccno,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('cdsaccount', 'cdsaccount.cdsaccid=user_securities.cdsaccid');
        $this->db->join('company', 'company.comid=user_securities.comid');
        $where = ' user_securities.userid = ' . $param;
        $this->db->where($where);
        $this->db->order_by("user_securities.id", "desc");
        $query = $this->db->get();
//        $this->db->select('user_securities.*, cdsaccount.cdsaccno');
//        $this->db->from('user_securities');
//        $this->db->join('cdsaccount', 'cdsaccount.cdsaccid=user_securities.cdsaccid');
//        $where = ' user_securities.userid = ' . $param;
//        $this->db->where($where);
//        $this->db->order_by("user_securities.id", "desc");
//        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getUserSecuritiesGroupList($param) {
        $this->db->select('user_securities.comid,SUM(user_securities.netamount) AS sumnetamount,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('company', 'company.comid=user_securities.comid');
        $where = " user_securities.userid = " . $param ."  AND user_securities.status = 'BOUGHT'";
        $this->db->where($where);
        $this->db->group_by("user_securities.comid");
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    
    public function getPortfolioBrokersForcompany($comid) {
        $this->db->select('user_securities.*, cdsaccount.cdsaccno,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('cdsaccount', 'cdsaccount.cdsaccid=user_securities.cdsaccid');
        $this->db->join('company', 'company.comid=user_securities.comid');
        $where = ' user_securities.userid = ' . $param;
        $this->db->where($where);
        $this->db->order_by("user_securities.id", "desc");
        $query = $this->db->get();
    }
    
    
    public function getUserCompanySecuritiesList($userid, $compid,$brokercomid) {
        
        /*
           SELECT DISTINCT user_securities.comid,company.com_name
          FROM user_securities
          INNER JOIN company
          ON user_securities.comid = company.comid
          INNER JOIN cdsaccount
          ON user_securities.cdsaccid = cdsaccount.cdsaccid
          INNER JOIN brokercompany
          ON cdsaccount.brokercomid = brokercompany.brokercomid
          WHERE user_securities.userid = 10 AND brokercompany.brokercomid = 2 AND company.comid = 1
          AND user_securities.status = 'BOUGHT'
         */
        
        
        $this->db->select('user_securities.*, cdsaccount.cdsaccno,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('company', 'user_securities.comid = company.comid');
        $this->db->join('cdsaccount', 'user_securities.cdsaccid = cdsaccount.cdsaccid');
        $this->db->join('brokercompany', 'cdsaccount.brokercomid = brokercompany.brokercomid');
        
        $where = "user_securities.userid = " . $userid ;
        if($brokercomid != ''){
            $where = $where . "  AND brokercompany.brokercomid = " . $brokercomid ; 
        }
        if($compid != ''){
             $where = $where . "  AND company.comid = " . $compid;
        }
        
        echo $where;
        //$where = "user_securities.userid = " . $userid . "  AND brokercompany.brokercomid = " . $brokercomid . "  AND company.comid = " . $compid . " ";
        $this->db->where($where);
        $this->db->order_by("user_securities.id", "desc");
        $query = $this->db->get();
        
//        $this->db->select('user_securities.*, cdsaccount.cdsaccno,company.com_name');
//        $this->db->from('user_securities');
//        $this->db->join('cdsaccount', 'cdsaccount.cdsaccid=user_securities.cdsaccid');
//        $this->db->join('company', 'company.comid=user_securities.comid');
//        $where = " user_securities.comid = " . $compid . " AND user_securities.userid = " . $userid;
//        $this->db->where($where);
//        $this->db->order_by("user_securities.id", "desc");
//        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getUserSecurity($secid) {
        $this->db->select('user_securities.*,company.comid,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('company', 'user_securities.comid = company.comid');
        $where = ' user_securities.id = ' . $secid;
        $this->db->where($where);
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getUserSecCompanyList($userid) {
        /*
          SELECT DISTINCT user_securities.comid,company.com_name
          FROM user_securities
          INNER JOIN company
          ON user_securities.comid = company.comid
          WHERE user_securities.userid = 10 AND user_securities.status = 'BOUGHT'
         */
        
        
        
        /*
  
          
          
          
          
         */
        $this->db->distinct();
        $this->db->select('user_securities.comid,company.com_name');
        $this->db->from('user_securities');
        $this->db->join('company', 'user_securities.comid = company.comid');
        $where = "user_securities.userid = " . $userid . " AND user_securities.status = 'BOUGHT'";
        $this->db->where($where);
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function setUserCompSelling($data, $secid, $updatedata) {
        $this->db->insert('user_securities_sold', $data);
        $this->setUpdateUserSecurity($updatedata, $secid);
    }

    public function setUpdateUserSecurity($updatedata, $secid) {
//        $data = array(
//            'title' => $title,
//            'name' => $name,
//            'date' => $date
//        );
        $this->db->where('id', $secid);
        $this->db->update('user_securities', $updatedata);
    }

    public function setSummary_bought_sold_funds($data) {
        $this->db->insert('summary_bought_sold_funds', $data);
    }

    public function listUserSummaryView($userid) {
        $this->db->select('summary_bought_sold_funds.*,company.com_name');
        $this->db->from('summary_bought_sold_funds');
        $this->db->join('company', 'summary_bought_sold_funds.comid = company.comid');
        $where = "summary_bought_sold_funds.userid = " . $userid;
        $this->db->where($where);
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

}
