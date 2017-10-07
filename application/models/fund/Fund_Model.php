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

    function getNew() {
        $fund = new stdClass();
        $fund->comid;
        $fund->amount;
    }

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getUserCompanyFundList($userid) {
        /*
          SELECT broker_fund_history.*,brokercompany.name FROM brokercompany
          INNER JOIN broker_fund_history
          ON brokercompany.brokercomid = broker_fund_history.brokercomid
          WHERE broker_fund_history.userid = 10
          ORDER BY broker_fund_history.id DESC
         */


        $this->db->select('broker_fund_history.*,brokercompany.name');
        $this->db->from('brokercompany');
        $this->db->join('broker_fund_history', 'brokercompany.brokercomid = broker_fund_history.brokercomid'); // joint with brokercompany table
        $this->db->order_by("broker_fund_history.id", "desc");
        $where = "broker_fund_history.userid =" . $userid;
        $this->db->where($where);

        $query = $this->db->get();
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function getUserBrokerCompanyBalance($comid, $userid) {
        /*
          SELECT * FROM broker_fund
          WHERE brokercomid = 1 AND userid = 2
         */
        $this->db->select('broker_fund.*');
        $this->db->from('broker_fund');
        $where = "brokercomid = " . $comid . " AND userid = " . $userid;
        $this->db->where($where);

        $query = $this->db->get();
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function setBrokerFundHistory($data) {
        $this->db->insert('broker_fund_history', $data);
    }

    public function updateBrokerFund($brokercomid, $userid, $updatedata) {
        $where = " brokercomid = " . $brokercomid . " AND userid = " . $userid;
        $this->db->where($where);
        $this->db->update('broker_fund', $updatedata);
    }

    public function setBrokerFund($data) {
        
        $this->db->select('broker_fund.*');
        $this->db->from('broker_fund');
        $where = " brokercomid = ".$data['brokercomid']." AND userid = ".$data['userid'];
        $query = $this->db->get();

        $result = $query->result();
        if ($result) {
            return;
        } else {
            $this->db->insert('broker_fund', $data);
        }
        
    }

}
