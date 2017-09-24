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
        $Security->effectdate = '';
        $Security->cdsaccid = '';
        $Security->comid = '';
        $Security->subtypeid = '';
        $Security->qty = '';
        $Security->amount = '';
        $Security->total= '';
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
        $where = " effectdate <=  '" . $effectdate ."' ";
        $this->db->where($where);
        $this->db->order_by("effectdate", "asc");
        $this->db->limit('5');
        
        $query =  $this->db->get();
        
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

}
