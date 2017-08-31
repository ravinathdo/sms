<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Login_Controller extends CI_Controller {

    public function showLogin() {
        $this->load->view('users_view/login');
    }

    public function login() {
        $this->load->helper('form');
        $this->load->model('Login_Model');
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        $doLogin = $this->Login_Model->doLogin($data);
        if ($doLogin) {
            //  var_export($doLogin);
//          echo $doLogin[0]->email;

            $newdata = array(
                'userbean' => $doLogin[0],
                'logged_in' => TRUE
            );
//            }
            $this->session->set_userdata($newdata);
            $this->load->view('users_view/loginsucess');
        } else {
            $data = array(
                'msg' => 'Invalid username or password',
                'heading' => 'My Heading',
                'message' => 'My Message'
            );
            $this->load->view('users_view/login', $data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('userbean');
        $this->session->unset_userdata('logged_in');
        $this->load->view('users_view/login');
    }

}
