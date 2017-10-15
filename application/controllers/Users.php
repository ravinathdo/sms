<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index() {
        $this->load->model('Users_m');
        $data['user'] = $this->Users_m->getAll();
        $this->load->view('users_view/index', $data);
    }

    public function userProfile() {
        //get session user_id;
        $userbean = $this->session->userdata('userbean');
        echo $userbean->userid;
        //get user basic information
        $this->load->model('Users_m');
        $profileInfo = $this->Users_m->get($userbean->userid);
        $data = array();
        $data['profile'] = $profileInfo;
        $this->load->model('CDSAccounts_m');
        $data['cdsAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);
        
        echo '<tt><pre>'. var_export($data['cdsAccList'], TRUE).'</pre></tt>';
        
        $this->load->view('users_view/profile', $data);
    }

    public function add() {
        $this->edit();
    }

    public function edit($id = NULL) {
        $this->load->model('Users_m');
        $data['user'] = $this->Users_m->getAll();

        if ($id) {
            $data['userreq'] = $this->Users_m->get($id);
        } else {
            $data['userreq'] = $this->Users_m->get_new(); //create empty fields
            $formdata["status"] = "Pending";
        }

        $rules = $this->Users_m->rules;
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {

            $formdata = $this->Users_m->array_from_post(array('email', 'fname', 'mname', 'lname', 'mobile'));
            $this->Users_m->save($formdata, $id);
            redirect('Users/');
        }

        $this->load->view('Users_view/add', $data);
    }

    //----------Approval
    public function approval($id) {

        $this->load->model('Users_m');
        $rec = $this->Users_m->get($id); //get user table data
        if ($rec) {
            $data = array(
                'status' => 1,
                'approvedate' => date('Y-m-d')
            );
            $this->db->set($data);
            $this->db->where('userid', $id);
            $this->db->update('user'); //update table
        }
        redirect('Users');
    }

    //----------deactivate
    public function deactivate($id) {

        $this->load->model('Users_m');
        $rec = $this->Users_m->get($id); //get user table data
        if ($rec) {
            $data = array(
                'status' => 0
            );
            $this->db->set($data);
            $this->db->where('userid', $id);
            $this->db->update('user'); //update table
        }
        redirect('Users');
    }

//----------User Login
    public function login() {

        $this->load->model('Users_m');
        //$this->Users_m->getUsers();

        $this->load->view('Users_view/login');
        //var_dump($this->db->last_query());
    }

    public function userLogin() {
        //$this->input->post('name');
        if ($this->input->post('submit') == true) {
            $myusername = $this->input->post('username');
            $mypassword = $this->input->post('password');

            if (empty($myusername or $mypassword)) {
                die('Please enter Username and Password');
            }

            $this->load->model('Users_m');
            $result = $this->Users_m->getUsers();
            //var_dump($this->db->last_query());
            //$this->db->WHERE('username',$myusername and 'password',$mypassword);
            var_dump($this->db->last_query());
            // $count = $this->$result->num_rows;
            //
	// 			if($count==1){
            // 				$this->load->view('users_view/loginsucess');
            // 			} else {
            // 				echo 'Invalid';
            // 			}
            //
	// 		$result->free();

            $this->load->view('users_view/loginsucess');
        }
    }

}
