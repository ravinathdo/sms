<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cal_Model
 *
 * @author ravi
 */
class Cal_Model extends CI_Model {

    //put your code here


    public function getParamValue($param) {
        $this->db->select('value');
        $this->db->from('param');
        $where = " lable =  '".$param."' ";
         $this->db->where($where);
        $query = $this->db->get();
        $result = $query->result();
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function updateCalData($updatedata, $calid) {
        $this->db->where('calid', $calid);
        $this->db->update('cal', $updatedata);
    }

}
