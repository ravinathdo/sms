<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Registration_Controller extends CI_Controller {

    public function signUp() {
        $this->load->view('users_view/signUp');
    }

    public function setRegistration() {
        $this->load->helper('form');
        $this->load->model('Registration_Model');

        //collect the input 
        $data = array(
            'email' => $this->input->post('email'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'mobile' => $this->input->post('mobile'),
            'password' => sha1($this->input->post('password')), // password is encripted
            'role' => 'user', // user role
            'status' => 0, // deactivate
        );

        $setRegistration = $this->Registration_Model->setRegistration($data);
        if ($setRegistration) {
            $data['msg'] = '<p class="bg-success"> User creation successfull , pending authorization </p>';
        } else {
            $data['msg'] = '<p class="bg-success"> Invalid input please try again </p>';
        }
        $this->load->view('users_view/signUp', $data);
    }

}

?>