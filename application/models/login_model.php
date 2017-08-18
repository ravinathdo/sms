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

    public function doLogin($data) {

        //1.get_where
//        $query = $this->db->get_where('user', array(
//            "email" => $data['username'],
//            "password" => $data['password']
//        ));
       
        
        //2.
        $this->db->select('*');
        $this->db->from('user');
        $where = " email = '".$data['username']."' AND password = PASSWORD('".$data['password']."')";
        $this->db->where($where);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
