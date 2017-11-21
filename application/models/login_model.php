<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Login_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function setPasswordChange($inputData) {
        $userbean = $this->session->userdata('userbean');
        //echo 'setPasswordChange<br>' . $userbean->email;
        $this->db->select('*');
        $this->db->from('user');
        $pword = sha1($inputData['currentpass']);
        $where = " email = '" . $userbean->email . "' AND password = '" . $pword . "'";
        $this->db->where($where);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function updatePassword($pwd) {
        $userbean = $this->session->userdata('userbean');
        $pwordx = sha1($pwd);
//        echo '<tt><pre>'.var_export($userbean, TRUE).'</pre></tt>';
        $this->db->set('password',$pwordx );
        $this->db->where('userid', $userbean->userid);
        $this->db->update('user');
    }

    public function setLogTrace($data) {
        $this->db->insert('log_trace', $data);
    }

    public function getLogTrace($limit) {
        $this->db->select('log_trace.*');
        $this->db->from('log_trace');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function doLogin($data) {

        //1.get_where
//        $query = $this->db->get_where('user', array(
//            "email" => $data['username'],
//            "password" => $data['password']
//        ));
        //2.
        $this->db->select('*');
        $this->db->from('user');
        $where = " email = '" . $data['username'] . "' AND password = '" . $data['password'] . "' AND status = 1 ";
        $this->db->where($where);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function array_from_post($fields) {
        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

}
