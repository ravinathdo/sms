<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fund_Model
 *
 * @author ravi
 */
class Fund_Model extends CI_Model {
    //put your code here
    //put your code here
    function __construct() {
        parent::__construct();
    }

    //validation rules
    public $rules = array(
        'comid' => array(
            'field' => 'comid',
            'label' => 'Company Name',
            'rules' => 'trim|required'
        ),
        'amount' => array(
            'field' => 'amount',
            'label' => 'Amount',
            'rules' => 'trim|required'
        )
    );
    
    function getNew(){
     $fund =  new stdClass();
     $fund->comid;
     $fund->amount;
    }


    public function getUserCompanyFundList($userid) {
         $this->db->select('company_user_fund.*,company.comid,company.com_name,user.userid');
        $this->db->from('company_user_fund');
        $this->db->join('company', 'company_user_fund.comid = company.comid'); // joint with brokercompany table
        $this->db->join('user', 'company_user_fund.userid = user.userid'); // joint with brokercompany table
        $this->db->order_by("lastupdated", "desc");
        $where = "company_user_fund.userid = " . $userid;
        $this->db->where($where);

        $query = $this->db->get();
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }
    
    public function getUserCompanyFundDelail($comid,$userid) {
        
    }
    
}
