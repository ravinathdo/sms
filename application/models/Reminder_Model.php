<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reminder_Model
 *
 * @author ravi
 */
class Reminder_Model extends CI_Model {
    //put your code here
    public function setReminder($param) {
        $this->db->insert('reminder',$param);
    }
    
    
     public function array_from_post($fields) {
        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
    
    public function getReminderList($param,$userid) {
        if($param == 'ACTIVE'){
        $this->db->where('status = \'ACTIVE\' AND  userid = '.$userid);
        }else{
        $this->db->where('userid = '.$userid);
            
        }
        $query = $this->db->get('reminder');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
}
