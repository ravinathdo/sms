<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Registration_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function setRegistration($data) {
        //data insert into database 
        $flag = FALSE;
        try {
            $this->db->insert('user', $data);
            $flag = TRUE;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $flag;
    }

}

?>